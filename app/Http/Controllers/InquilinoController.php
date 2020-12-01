<?php

namespace App\Http\Controllers;

use App\Models\Inquilino;
use Illuminate\Http\Request;

class InquilinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inquilinos.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function show(Inquilino $inquilino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquilino $inquilino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquilino $inquilino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquilino  $inquilino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquilino $inquilino)
    {
        //
    }
}
