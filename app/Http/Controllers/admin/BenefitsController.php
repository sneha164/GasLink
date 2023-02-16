<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Benefits;

class BenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Benefits::all();
        return view('admin.components.benefits.index', compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.components.benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(gettype($request->benefits_image));
        $save = new Benefits();
        $save->benefits_title = $request->benefits_title;
        // $save->benefits_image = $request->benefits_image;
        $save->benefits_description = $request->benefits_description;
        if($request->benefits_image){
            $filename = time() . '.' . $request->benefits_image->getClientOriginalExtension();
            $request->benefits_image->move('uploads/benefits', $filename);
            $save->benefits_image = $filename;
        }
        $save->save();
        return redirect()->route('admin.benefit.index');
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
    public function edit($id)
    {
        $data = Benefits::find($id);
        return view('admin.components.benefits.edit', compact('data'));
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
        $save = Benefits::find($id);
        $save->benefits_title = $request->benefits_title;
        $save->benefits_description = $request->benefits_description;
        if($request->benefits_image){
            $dest = 'uploads/benefits/'.$save->benefits_image;
            if(File::exists($dest)){
                File::delete($dest);
            }
            $filename = $request->benefits_image->getClientOriginalName() . '.' . $request->benefits_image->getClientOriginalExtension();
            $request->image->move('uploads/benefits', $filename);
            $save->benefits_image = $filename;
        }
        $save->save();
        return redirect()->route('admin.benefit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Benefits::find($id);
        $dest = 'uploads/benefits/'.$delete->benefits_image;
        if(File::exists($dest)){
            File::delete($dest);
        }
        $delete->delete();
        return redirect()->route('admin.benefit.index');
    }
}
