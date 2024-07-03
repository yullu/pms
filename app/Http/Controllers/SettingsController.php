<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
   public function index()
   {
       $title = 'Settings';
       $settings = Setting::find(1);
       return view('admin.settings.update', compact('settings','title'));
   }
   public function store(Request $request)
   {
       $this->validate($request,[
           'name'=>'required',
       ]);
       $setting =Setting::find(1);
       $setting->name = $request->name;
       if(!empty($request->file('website_logo'))){
           //for unlinkiong the existinf files
           if(!empty($setting->website_logo) && file_exists('uploads/logo/'.$setting->website_logo)){
                unlink('uploads/logo/'.$setting->website_logo);
           }
           //end
           $file = $request->file('website_logo');
           $randstr = Str::random(30);
           $filename = $randstr. '.'.$file->getClientOriginalName();
           $file->move(public_path().'/uploads/logo', $filename);
           $setting->website_logo = $filename;
       }
       $setting->save();

       return redirect()->route('settings')->with('success','Settings updated successfully');


   }
}
