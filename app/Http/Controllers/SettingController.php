<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use Image;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setting = Setting::orderBy('id', 'desc')->first();
        $settingCount = Setting::count();

        return view('backend.setting.index',['setting'=>$setting, 'settingCount' => $settingCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingRequest $request)
    {
        //
        $setting = Setting::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $setting);
        }

        return redirect()->route('setting.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
        return view('backend.setting.edit',[
            'edit' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        //
        $setting->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$setting->logo);
            $this->_uploadImage($request, $setting);
        }

        return redirect()->route('setting.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
        $setting->delete();
        if(!empty($setting->logo));
        @unlink('storage/'.$setting->logo);

        return redirect()->route('setting.index')->with('status','Data deleted successfully!');
    }



    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(96, 96)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }
}
