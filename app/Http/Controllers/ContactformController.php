<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;
class ContactformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contactform = Contactform::orderBy('id', 'desc')->get();
        return view('backend.message.index', compact('contactform'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactform $contactform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactform $contactform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactform $contactform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactform $contactform)
    {
        //
    }
}
