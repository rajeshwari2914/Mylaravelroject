<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_reg;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $student=student_reg::get();
        return view('view_student',compact('student'));
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
        $name=$request->get('name');
        $mobile=$request->get('mobile');
        
        $email=$request->get('email');
        $degree=$request->get('degree');
        $wcompany=$request->get('working_company');
        $wdesignation=$request->get('working_designation');
        $package=$request->get('here_package');
        $batch_year=$request->get('batch_year');
        //$profile=$request->get('profile');
        $teacher_like=$request->get('teacher_like');
        $row_batch_meets=$request->get('rowcount');
        $profile=$request->hasFile('profile');
        $arr=array();
        if($profile)
        {

            for($i=1; $i<=$row_batch_meets; $i++)
            {
                $name=$request->get('namemeets'.$i);
                $contact=$request->get('contactmeets'.$i);
                $data=array(
                    "name"=>$name,
                    "contact"=>$contact
                );
                array_push($arr,$data);
            }
            $meets=json_encode($arr);
            $files = $request->file('profile');
            $file_name1 = $files->getClientOriginalName();
            $student=new student_reg([
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,
                'degree'=>$degree,
                'working_company'=>$wcompany,
                'working_designation'=>$wdesignation,
                'here_package'=>$package,
                'batch_year'=>$batch_year,
                'profile'=>$file_name1,
                'teacher_like'=>$teacher_like,
                'batch_meets'=>$meets
            ]);
            $student->save();
        	$files->move('image/',$file_name1);
            
        }
        return redirect('/');


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
        //
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
        //
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
}
