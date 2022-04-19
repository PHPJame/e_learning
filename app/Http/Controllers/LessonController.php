<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            $data  = Lesson::all();
            return view('ADIndexLesson', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ADCreateLesson');
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
            'lesson_name' => 'required',
            'topic_id' => 'required',
        ]);
        $data = array();
        $data["lesson_name"] = $request->lesson_name;
        $data["topic_id"] = $request->topic_id;

        //query builder
        DB::table('lessons')->insert($data);

        return redirect()->route('ADIndexLesson')->with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lasson  $lasson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('ADIndexLesson', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lasson  $lasson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        return view('ADEditLesson', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lasson  $lasson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lesson_name' => 'required',
            'topic_id' => 'required',
        ]);
        $update = Lesson::find($id)->update([
            'lesson_name' => $request->lesson_name,
            'topic_id' => $request->topic_id,
        ]);
        return redirect()->route('ADIndexLesson')->with('success', "อัพเดตข้อมูลเรียบร้อย");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lasson  $lasson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Lesson::find($id)->forceDelete();
        return redirect()->route('ADIndexLesson')->with('success', "ลบข้อมูลเรียบร้อย");
    }
}