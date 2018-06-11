<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeesMaster;
use App\Admission;
use App\Course;
class FeesMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        $feeMasters = NULL; 
        // dd($course[1]->feeMaster);

        return view('add_fees',['masters' => $feeMasters,'res' => NULL,'course'=>$course]);
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
        $fees=new FeesMaster;
        $fees->course_id=$request->course_id;
        $fees->fees_type=$request->fees_type;
        $fees->amount=$request->amount;
        $fees->description=$request->description;
        $fees->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            
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
        $fees=FeesMaster::find($id);
        $fees->$course_id=$request->$course_id;
        $fees->$fees_type=$request->$fees_type;
        $fees->$amount=$request->$amount;
        $fees->$summary=$request->$summary;
        $fees->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchStudent(Request $request){

        // get value
        $sem = $request->semester;
        $id  = $request->id;
        $name  = $request->name;


        $res= [];
        // query
        if (is_null($sem) ){
                $res = Admission::where('id',$id)->Where('student_name','LIKE','%'.$name.'%')->get();
            }else if (is_null($name) && is_null($id) ) {
               $res = Admission::Where('semester',$sem)->get();
            }else {
                $res = Admission::where('id',$id)   ->get();
            }
        //return
            $res = Admission::all();
           return view('master_fees_table',['res'=>$res]);    
    }

    public function getFeeMaster(Request $request){
        $course_id = $request->id;
        // dd($course_id);
        $c = Course::find($course_id);
        $msg = $c->feeMaster;
        return view('fees_master_table',['masters'=>$msg]);
    }

}
