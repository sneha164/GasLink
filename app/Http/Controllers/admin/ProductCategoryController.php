<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductCategory::all();
        return view('admin.components.product_category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.components.product_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = new ProductCategory();
        $save->title = $request->title;
        $save->description = $request->description;
        if($request->image){
            $filename = rand(0, 9999) . '_' . time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('uploads/productcategory', $filename);
            $save->image = $filename;
        }
        $save->save();
        return redirect()->route('admin.product_category.index');
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
        $categories = ProductCategory::find($id);
        return view('admin.components.product_category.edit', compact('categories'));
     
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
        
         $save = ProductCategory::find($id);
         $save= $request->all();
         $save-> update($save);
    //     $save->title = $request->title;
    //     $save->description = $request->description;
    //     if($request->image){
    //         $dest = 'uploads/productcategory/'.$save->image;
    //         if(File::exists($dest)){
    //             File::delete($dest);
    //         }
    //         $filename = $request->image->getClientOriginalName() . '.' . $request->image->getClientOriginalExtension();
    //         $request->image->move('uploads/productcategory', $filename);
    //         $save->image = $filename;
    //     }
    //     $save->save();
        return redirect(route('product_category.index'));
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductCategory::find($id);
        $dest = 'uploads/productcategory/'.$delete->image;
        if(File::exists($dest)){
            File::delete($dest);
        }
        $delete->delete();
        return redirect()->route('admin.product_category.index');
    }
}
