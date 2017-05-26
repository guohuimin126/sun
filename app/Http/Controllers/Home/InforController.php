<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class InforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.invest.infor');
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
     * @param  \App\Infor  $infor
     * @return \Illuminate\Http\Response
     */
    public function show(Infor $infor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infor  $infor
     * @return \Illuminate\Http\Response
     */
    public function edit(Infor $infor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infor  $infor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infor $infor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infor  $infor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infor $infor)
    {
        //
    }
}
