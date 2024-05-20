<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use App\Http\Requests\CounterRequest;
class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $counter = Counter::orderBy('id', 'desc')->get();
        $counterCount = Counter::count();

        return view('backend.counter.index',['counter'=>$counter, 'counterCount' => $counterCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CounterRequest $request)
    {
        //
        $counter = Counter::create($request->all());


        return redirect()->route('counter.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counter $counter)
    {
        //
        return view('backend.counter.edit',[
            'edit' => $counter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CounterRequest $request, Counter $counter)
    {
        //
        $counter->update($request->all());

        return redirect()->route('counter.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counter $counter)
    {
        //
        $counter->delete();

        return redirect()->route('counter.index')->with('status','Data deleted successfully!');
    }
}
