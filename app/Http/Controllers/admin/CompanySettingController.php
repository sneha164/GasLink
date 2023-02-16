<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanySetting;
use Illuminate\Support\Facades\File;


class CompanySettingController extends Controller
{
    public function edit(Request $request, $id)
    {
        $setting = CompanySetting::find($id);
        return view('admin.components.company_setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = CompanySetting::find($id);
        $setting->company_name = $request->company_name;
        $setting->company_title = $request->company_title;
        $setting->company_description = $request->company_description;
        $setting->about_title = $request->about_title;
        $setting->about_description = $request->about_description;
        $setting->about_image = $request->about_image;
        $setting->phone_number = $request->phone_number;
        $setting->phone_number_alt = $request->phone_number_alt;
        $setting->contact_email = $request->contact_email;
        $setting->contact_email_alt = $request->contact_email_alt;
        $setting->address_1 = $request->address_1;
        $setting->address_2 = $request->address_2;
        $setting->map = $request->map;
        if($request->about_image){
            $dest = 'uploads/comapnysetting/'.$setting->about_image;
            if(File::exists($dest)){
                File::delete($dest);
            }
            $filename = $request->about_image->getClientOriginalName() . '.' . $request->about_image->getClientOriginalExtension();
            $request->about_image->move('uploads/comapnysetting', $filename);
            $setting->about_image = $filename;
        }
        $setting->save();
        return redirect()->back();
    }
}
