@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2"> เพิ่มหัวข้อบทเรียน
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            เกิดข้อผิดพลาด.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('ADAddTopic')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">หัวข้อบทเรียน</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="topic_name" value=""
                                        id="example-text-input" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">หัวข้อบทเรียน</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="topic_id" value=""
                                        id="example-text-input" required>
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
                                    <input type="file" class="custom-file-input" id="customFile" name="topic_img" />
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="example-email-input"
                                    class="col-sm-2 col-form-label">รายละเอียดบทเรียน</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" id="exampleTextarea" name="topic_detail" rows="4"
                                        required></textarea>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                            <div class="col-12 text-center">
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('ADIndexTopic') }}" class="btn btn-danger">ยกเลิก</a>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>