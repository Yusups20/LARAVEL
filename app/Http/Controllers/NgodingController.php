<?php

namespace App\Http\Controllers;

use App\Ngoding;
use Illuminate\Http\Request;

class NgodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ngoding::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ini halaman create";
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
     * @param  \App\Ngoding  $ngoding
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ngoding = Ngoding::where('id' , $id)->firstorFail();
        return $ngoding;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ngoding  $ngoding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ngoding = Ngoding::where('id' , $id)->firstorFail();
        return $ngoding;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ngoding  $ngoding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ngoding  $ngoding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ngoding = Ngoding::where('id' , $id)->firstorFail();
        return $ngoding->delete();
    }
}
