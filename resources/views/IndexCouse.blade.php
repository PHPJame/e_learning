@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2">
                            จัดการรายวิชา
                            <a class="card-toolbar btn btn-success bi bi-plus-circle" style="float:right;"
                                href="{{ route('CreateCouse') }}">
                                เพิ่มรายวิชา</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รายวิชา</th>
                                        <th>จัดการข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$value->course_name }}</td>
                                        <td>
                                            <form action="/{$course->id}/IndexCouse" method="POST">
                                                <a href="{{url('/EditCouse/'.$value->id)}}"
                                                    class="btn btn-warning text-light bi bi-pencil"> แก้ไข</a>
                                                @csrf
                                                <a href="{{url('/DeleteCouse/'.$value->id)}}"
                                                    class="btn btn-danger bi bi-trash"> ลบ</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>