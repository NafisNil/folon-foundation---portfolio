<?php

namespace App\Http\Controllers;

use App\Models\Whatwedo;
use Illuminate\Http\Request;
use App\Http\Requests\WhatwedoRequest;
use Image;
class WhatwedoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $whatwedo = Whatwedo::orderBy('id', 'desc')->get();
        $whatwedoCount = Whatwedo::count();

        return view('backend.whatwedo.index',['whatwedo'=>$whatwedo, 'whatwedoCount' => $whatwedoCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.whatwedo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhatwedoRequest $request)
    {
        //
        $whatwedo = Whatwedo::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $whatwedo);
        }

        return redirect()->route('whatwedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Whatwedo $whatwedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whatwedo $whatwedo)
    {
        //
        return view('backend.whatwedo.edit',[
            'edit' => $whatwedo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhatwedoRequest $request, Whatwedo $whatwedo)
    {
        //
        $whatwedo->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$whatwedo->logo);
            $this->_uploadImage($request, $whatwedo);
        }

        return redirect()->route('whatwedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whatwedo $whatwedo)
    {
        //
        $whatwedo->delete();
        if(!empty($whatwedo->logo));
        @unlink('storage/'.$whatwedo->logo);

        return redirect()->route('whatwedo.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(60, 60)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }
}
