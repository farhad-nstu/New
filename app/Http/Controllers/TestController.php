<?php

namespace App\Http\Controllers;

use App\Test;
use App\Dept;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();
        $depts = Dept::all();
        return view('tests.index', compact('tests', 'depts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depts = Dept::all();
        return view('tests.create', compact('depts'));
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
            'roll'=> 'required',
            
         ]);
 
 
 
         $test = new Test;
 
         $test->name = $request->name;
         $test->roll = $request->roll;
         $test->dept_id = $request->dept_id;
        $image = $request->file('picture');
        if ($image) {
           
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image.'.'.$ext;
            $upload_path='images';
            // $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $test->picture = $success;
            
        }
 
         $test->save();
 
         return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);
        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required|max:200',
            'roll'=> 'required',
            
         ]);
 
 
 
         $test = Test::find($id);
 
         $test->name = $request->name;
         $test->roll = $request->roll;

        $image = $request->file('image');
        if ($image) {
           
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image.'.'.$ext;
            $upload_path='images';
            //$image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $test->picture = $success;
            
        }
 
         $test->update();
 
         return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        return back();
    }
}
