<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationRequest;
use App\Models\user_info;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    public function index()
    {
        return view('register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registrationRequest $registrationRequest, user_info $user_info)
    {
        $registration = $user_info::create($registrationRequest -> all());
        return response() -> json(['message' => 'User Information has been saved!', 'data' => $registration]);
    }

}
