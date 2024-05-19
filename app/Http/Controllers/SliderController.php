<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;

use Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slider = Slider::orderBy('id', 'desc')->get();
        $sliderCount = Setting::count();

        return view('backend.slider.index',['slider'=>$slider, 'sliderCount' => $sliderCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        //
        $slider = Slider::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $slider);
        }

        return redirect()->route('slider.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
        return view('backend.slider.edit',[
            'edit' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        //
        $slider->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$slider->logo);
            $this->_uploadImage($request, $slider);
        }

        return redirect()->route('slider.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        if(!empty($slider->logo));
        @unlink('storage/'.$slider->logo);

        return redirect()->route('slider.index')->with('status','Data deleted successfully!');
    }
}
