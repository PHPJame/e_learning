<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('topics')
            ->join('courses', 'topics.course_id', 'courses.id')
            ->join('users', 'topics.user_id', 'users.id')
            ->select('topics.*', 'users.name', 'courses.course_name')->get();
        return view('ADIndexTopic', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course  =  Course::all();;
        return view('ADCreateTopic', compact('course'));
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
            'topic_name' => 'required',
            'topic_detail' => 'required',
            'topic_img' => 'required',
            'course_id' => 'required',
            'user_id' => 'required',

        ]);
        $data = array();
        $data["topic_name"] = $request->topic_name;
        $data["topic_detail"] = $request->topic_detail;
        $data["topic_img"] = $request->topic_img;
        $data["course_id"] = $request->course_id;
        $data["user_id"] = $request->user_id;
        //query builder
        DB::table('topics')->insert($data);

        return redirect()->route('ADIndexTopic')->with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return view('ADIndexTopic', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course  =  Course::all();;
        $topic = Topic::find($id);
        return view('ADEditTopic', compact('topic', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'topic_name' => 'required',
            'topic_detail' => 'required',
            'topic_img' => 'required',
            'course_id' => 'required',
            'user_id' => 'required',
        ]);
        $update = Topic::find($id)->update([
            'topic_name' => $request->topic_name,
            'topic_detail' => $request->topic_detail,
            'topic_img' => $request->topic_img,
            'course_id' => $request->course_id,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('ADIndexTopic')->with('success', "อัพเดตข้อมูลเรียบร้อย");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Topic::find($id)->forceDelete();
        return redirect()->route('ADIndexTopic')->with('success', "ลบข้อมูลเรียบร้อย");
    }
}