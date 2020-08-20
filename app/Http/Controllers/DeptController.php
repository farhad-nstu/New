<?php

namespace App\Http\Controllers;

use App\Dept;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts = Dept::all();
        return view('depts.index', compact('depts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|max:200',
         ]); 
         $dept = new Dept; 
         $dept->name = $request->name; 
         $dept->save();
         return redirect()->route('depts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function show(Dept $dept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit(Dept $dept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dept $dept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dept $dept)
    {
        //
    }
}
