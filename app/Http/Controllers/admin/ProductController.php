<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Images;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.components.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.components.product.create', compact('categories'));
        $product = Product::all();
        return view('admin.components.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = new Product();
        $save->name = $request->name;
        $save->category_id = $request->category_id;
        $save->purchase_price = $request->purchase_price;
        $save->mrp = $request->mrp;
        $save->selling_price = $request->selling_price;
        $save->quantity = $request->quantity;
       
        $save->save();
        if($request->images){
            foreach($request->images as $image){
                $img = new Images();
                $img->product_id = $save->id;
                $filename = rand(0, 9999) . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/products', $filename);
                $img->url = $filename;
                $img->save();
            }    
            }
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $categories = ProductCategory::all();
        return view('admin.components.product.create', compact('categories'));
        $product = Product::find($id);
        return view('admin.components.product.edit', compact('product'));
        
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
        $save = Product::find($id);
        $save->name = $request->name;
        $save->category_id = $request->category_id;
        $save->purchase_price = $request->purchase_price;
        $save->mrp = $request->mrp;
        $save->selling_price = $request->selling_price;
        $save->quantity = $request->quantity;
            if($request->images){
                $dest = 'uploads/products/'.$save->images;
                if(File::exists($dest)){
                    File::delete($dest);
                }
                $filename = $request->images->getClientOriginalName() . '.' . $request->images->getClientOriginalExtension();
                $request->images->move('uploads/products', $filename);
                $save->images = $filename;
            }
            $save->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product::find($id);
        $dest = 'uploads/products/'.$delete->images;
        if(File::exists($dest)){
            File::delete($dest);
        }
       
        $delete->delete();
        return redirect()->route('admin.product.index');
    }
}
