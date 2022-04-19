@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2"> แก้ไขบทเรียน
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            เกิดข้อผิดพลาดบ้างอย่าง.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{url('/ADUpdateLesson/'.$lesson->id)}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">บทเรียน</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="lesson_name" id="example-text-input"
                                        value="{{$lesson->lesson_name}}">
                                </div>
                            </div>
                            <br>
                            <input type="hidden" id="topic_id" name="topic_id" value="{{Auth::user()->id}}">
                            <div class="col-12 text-center">
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('ADIndexLesson') }}" class="btn btn-danger">ยกเลิก</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>