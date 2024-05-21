<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Image;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog = Blog::orderBy('id', 'desc')->get();
        $blogCount = Blog::count();

        return view('backend.blog.index',['blog'=>$blog, 'blogCount' => $blogCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        //
        $blog = Blog::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $blog);
        }

        return redirect()->route('blog.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        return view('backend.blog.edit',[
            'edit' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
        $blog->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$blog->logo);
            $this->_uploadImage($request, $blog);
        }

        return redirect()->route('blog.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        if(!empty($blog->logo));
        @unlink('storage/'.$blog->logo);

        return redirect()->route('blog.index')->with('status','Data deleted successfully!');
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
