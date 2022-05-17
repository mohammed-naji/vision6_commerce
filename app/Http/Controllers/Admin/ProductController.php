<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        $product = new Product();

        return view('admin.products.create', compact('categories', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|min:3',
            'name_ar' => 'required|min:3',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'description_en' => 'required',
            'description_ar' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
        ]);


        $image = $request->file('image');
        $new_img_name = rand().time().'-'.strtolower(str_replace(' ', '-', $image->getClientOriginalName()));
        $image->move(public_path('uploads/images/products'), $new_img_name);

        // $data = $request->all();
        // $data['image'] = $new_img_name;

        // Product::create($data);
        $name = [
            'en' => $request->name_en,
            'ar' => $request->name_ar
        ];

        $description = [
            'en' => $request->description_en,
            'ar' => $request->description_ar
        ];
        Product::create([
            'name' => json_encode($name, JSON_UNESCAPED_UNICODE) ,
            'image' => $new_img_name,
            'description' => json_encode($description, JSON_UNESCAPED_UNICODE) ,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.products.index')->with('msg', 'Product Created Successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Product::select(['id', 'name'])->get();
        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'parent_id' => 'nullable|exists:products,id'
        ]);

        $product = Product::findOrFail($id);

        // NEW IM 88.PNG
        // 56464684646465496-new-im-88.png
        $new_img_name = $product->image;
        if($request->hasFile('image')) {
            $this->deleteImage($product->image);
            $image = $request->file('image');
            $new_img_name = rand().time().'-'.strtolower(str_replace(' ', '-', $image->getClientOriginalName()));
            $image->move(public_path('uploads/images/products'), $new_img_name);
        }

        $data = $request->all();
        $data['image'] = $new_img_name;

        $product->update($data);

        return redirect()->route('admin.products.index')->with('msg', 'Product Updated Successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $this->deleteImage($product->image);

        Product::where('parent_id', $product->id)->update(['parent_id' => null]);

        $product->delete();

        return redirect()->route('admin.products.index')->with('msg', 'Product Deleted Successfully')->with('type', 'danger');
    }

    private function deleteImage($src)
    {
        File::delete(public_path('uploads/images/products/'.$src));
    }

    /**
     * Display a deleted listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $products = Product::onlyTrashed()->orderByDesc('id')->paginate(10);
        return view('admin.products.trash', compact('products'));
    }

    public function restore($id)
    {
        Product::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function forcedelete($id)
    {
        Product::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }


}
