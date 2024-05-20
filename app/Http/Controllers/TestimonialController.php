<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;
use Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonial = Testimonial::orderBy('id', 'desc')->get();
        $testimonialCount = Testimonial::count();

        return view('backend.testimonial.index',['testimonial'=>$testimonial, 'testimonialCount' => $testimonialCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        //
        $testimonial = Testimonial::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $testimonial);
        }

        return redirect()->route('testimonial.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('backend.testimonial.edit',[
            'edit' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        //
        $testimonial->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$testimonial->logo);
            $this->_uploadImage($request, $testimonial);
        }

        return redirect()->route('testimonial.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        if(!empty($testimonial->logo));
        @unlink('storage/'.$testimonial->logo);

        return redirect()->route('testimonial.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 200)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }
}
