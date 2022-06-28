<?php

namespace App\Http\Controllers;

use App\Models\user_info;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = user_info::all();
        return view('user_info.index', compact('info'));
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
     * @param  \App\Models\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function show(user_info $user_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function edit(user_info $user_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_info $user_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_info $user_info)
    {
        //
    }
}
