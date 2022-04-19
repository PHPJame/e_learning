@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2"> แก้ไขหัวข้อบทเรียน
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
                        <form action="{{url('/ADUpdateTopic/'.$topic->id)}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ชื่อ</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="topic_name" id="example-text-input"
                                        value="{{$topic->topic_name}}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="exampleSelectd" class="col-sm-2 col-form-label">รายวิชา</label>
                                <div class="col-sm-4">
                                    <select class="form-select" id="exampleSelectd" name="course_id" id="course_id"
                                        required>
                                        <option value="">--------------------เลือกรายวิชา--------------------
                                        </option>
                                        @foreach($course as $key => $value)
                                        <option value="{{$value->id}}">{{$value->course_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">รูปภาพ</label>
                                <div class="custom-file col-sm-4">
                                    <input type="file" class="custom-file-input" id="topic_img" name="topic_img" />
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="example-email-input"
                                    class="col-sm-2 col-form-label">รายละเอียดบทเรียน</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" id="exampleTextarea" name="topic_detail"
                                        rows="4">{{$topic->topic_detail}}</textarea>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                            <div class="col-12 text-center">
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('ADIndexTopic') }}" class="btn btn-danger">ยกเลิก</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>