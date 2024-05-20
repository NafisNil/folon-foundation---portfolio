<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Requests\AboutusRequest;
use Image;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aboutus = Aboutus::orderBy('id', 'desc')->first();
        $aboutusCount = Aboutus::count();

        return view('backend.aboutus.index',['aboutus'=>$aboutus, 'aboutusCount' => $aboutusCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutusRequest $request)
    {
        //
        $aboutus = Aboutus::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $aboutus);
        }

        return redirect()->route('aboutus.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($aboutus)
    {
        //
        $about = Aboutus::find($aboutus);
        return view('backend.aboutus.edit',[
            'edit' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutusRequest $request,$aboutus)
    {
        //
        $about = Aboutus::find($aboutus);
        $about->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$about->logo);
            $this->_uploadImage($request, $about);
        }

        return redirect()->route('aboutus.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutus $aboutus)
    {
        //
        $aboutus->delete();
        if(!empty($aboutus->logo));
        @unlink('storage/'.$aboutus->logo);

        return redirect()->route('aboutus.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 700)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }
}
