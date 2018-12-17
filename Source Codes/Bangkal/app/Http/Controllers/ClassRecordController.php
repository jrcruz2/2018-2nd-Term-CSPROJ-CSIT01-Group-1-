<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRecord;

class ClassRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrecords = ClassRecord::orderBy('section', 'grade_level')->get();
        return view('faculty.class')->with('classrecords', $classrecords);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'section' => 'required',
            'grade_level' => 'required',
            'subject' => 'required'
        ]);

        $classrecord = new ClassRecord;
        $classrecord->section = $request->input('section');
        $classrecord->grade_level = $request->input('grade_level');
        $classrecord->subject = $request->input('subject');
        $classrecord->user_id = auth()->user()->id;
        $classrecord->save();

        return redirect('/class')->with('success', 'Class Record Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classrecord = ClassRecord::find($id);
        return view('faculty.show')->with('classrecord', $classrecord);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classrecord = ClassRecord::find($id);
        return view('faculty.edit')->with('classrecord', $classrecord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'section' => 'required',
            'grade_level' => 'required',
            'subject' => 'required'
        ]);

        $classrecord = ClassRecord::find($id);
        $classrecord->section = $request->input('section');
        $classrecord->grade_level = $request->input('grade_level');
        $classrecord->subject = $request->input('subject');
        $classrecord->save();

        return redirect('/class')->with('success', 'Class Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classrecord = ClassRecord::find($id);
        $classrecord->delete();

        return redirect('/class')->with('success', 'Class Record Removed');
    }
}
