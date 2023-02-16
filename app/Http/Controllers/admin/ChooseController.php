<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Choose;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Choose::all();
        return view('admin.components.choose.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.components.choose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = new Choose();
        $save->choose_title = $request->choose_title;
        $save->choose_description = $request->choose_description;
        if($request->choose_image){
            if($request->choose_image){
                $filename = time() . '.' . $request->choose_image->getClientOriginalExtension();
                $request->choose_image->move('uploads/choose', $filename);
                $save->choose_image = $filename;
            }
        $save->save();
        return redirect()->route('admin.choose.index');
    }
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
        $data = Choose::find($id);
        return view('admin.components.choose.edit', compact('data'));
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
        $save = Choose::find($id);
        $save->choose_title = $request->choose_title;
        $save->choose_description = $request->choose_description;
        if($request->choose_image){
            $dest = 'uploads/choose/'.$save->choose_image;
            if(File::exists($dest)){
                File::delete($dest);
            }
            $filename = $request->choose_image->getClientOriginalName() . '.' . $request->choose_image->getClientOriginalExtension();
            $request->choose_image->move('uploads/choose', $filename);
            $save->choose_image = $filename;
        }
        $save->save();
        return redirect()->route('admin.choose.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Choose::find($id);
        $dest = 'uploads/choose/'.$delete->choose_image;
        if(File::exists($dest)){
            File::delete($dest);
        }
        $delete->delete();
        return redirect()->route('admin.choose.index');
    }
}
