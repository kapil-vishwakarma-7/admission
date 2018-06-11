<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Course;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=Course::all();
        return view('admission',['courses'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a=Admission::all();
        return view('admission_list',['admissions'=>$a]);;
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $a = new Admission();
        $a->student_name=$request->fullname;
        $a->email=$request->email;
        $a->student_contact=$request->student_contact;
        $a->gender=$request->gender;
        $a->father_name=$request->gdname;
        $a->father_mobile=$request->father_mobile;
        $a->mother_name=$request->mother_name;
        $a->dob=$request->dob;
        $a->permanent_add=$request->permanent_add;
        $a->current_add=$request->current_add;
        $a->category=$request->category;
        $a->cast=$request->cast;
        $a->medium=$request->medium;
        $a->adhar_no=$request->adhar_no;
        $a->exam=$request->exam;
        $a->subject=$request->subject;
        $a->board=$request->board;
        $a->year=$request->year;
        $a->obtain_mark=$request->obtain_mark;
        $a->total_mark=$request->total_mark;
        $a->percentage=$request->percentage;    
        $a->course_id=$request->course_id;
        $img = $request->file('image');
        $img_marksheet = $request->file('image_marksheet');
        $img_adhar = $request->file('image_adhar');
        $img_dest = 'uploads';
        $img->move($img_dest,$img->getClientOriginalName());
        $a->image=$img->getClientOriginalName();
        $img_marksheet->move($img_dest,$img_marksheet->getClientOriginalName());
        $img_adhar->move($img_dest,$img_adhar->getClientOriginalName());
        $a->image_marksheet=$img_marksheet->getClientOriginalName();
        $a->image_adhar=$img_adhar->getClientOriginalName();
        $a->save();
        $msg="Admission succesfully....";
        return response()->json($msg);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
