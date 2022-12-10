<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

class customers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        echo $request->admin_id;
        echo $request->name;
        echo $request->phn;
        echo $request->msg;
        echo $request->email;


        try { 
            cr::create(
                [

                    'admin_id' => $request->admin_id,
                    'name' => $request->name,
                    'phn' => $request->phn,
                    'course' => $request->msg,
                    'email' => $request->email,
    
                   
                ]
            );
           } catch(\Illuminate\Database\QueryException $ex){ 
             //dd($ex->getMessage()); 
           
             return redirect()->route('contact')->with('error', '   حصل خطأ'.$ex->getMessage());
           }

           return redirect()->route('contact')->with('done', '  سيتم التواصل معك في الساعات القادمة ');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
