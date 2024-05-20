<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use App\Http\Requests\CauseRequest;
use Image;
class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cause = Cause::orderBy('id', 'desc')->get();
        $causeCount = Cause::count();

        return view('backend.cause.index',['cause'=>$cause, 'causeCount' => $causeCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.cause.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CauseRequest $request)
    {
        //
        $cause = Cause::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $cause);
        }

        return redirect()->route('cause.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cause $cause)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cause $cause)
    {
        //
        return view('backend.cause.edit',[
            'edit' => $cause
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CauseRequest $request, Cause $cause)
    {
        //
        $cause->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$cause->logo);
            $this->_uploadImage($request, $cause);
        }

        return redirect()->route('cause.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cause $cause)
    {
        //
        $cause->delete();
        if(!empty($cause->logo));
        @unlink('storage/'.$cause->logo);

        return redirect()->route('cause.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 300)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }
}
