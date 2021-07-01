<?php

namespace App\Http\Controllers;

use App\Models\Palindrome;
use Illuminate\Http\Request;
use App\Http\Requests\PalindromeRequest;

class PalindromeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('palindrome/index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PalindromeRequest $request)
    {
        $request->validated();

        Palindrome::create(['name' => $request->name,]);

        return view('palindrome/index', ['success'    => 'Textul introdus este palindrom',]);
    }
}
