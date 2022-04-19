@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2"> เพิ่มรายวิชา
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
                        <form action="{{route('AddCouse')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">รายวิชา</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="course_name" value=""
                                        id="example-text-input" required>
                                </div>
                            </div>
                            <br>
                            <div class="col-12 text-center">
                                <input type="submit" value="บันทึก" class="btn btn-primary">
                                <a href="{{ route('IndexUser') }}" class="btn btn-danger">ยกเลิก</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>