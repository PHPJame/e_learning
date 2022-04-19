@extends('ADNavbar')


<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title bi bi-table pt-2"> จัดการสมาชิก
                            <a class="btn btn-success bi bi-person-plus" style="float:right;"
                                href="{{ route('CreateUser') }}">
                                เพิ่มสมาชิก</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>E-mail</th>
                                        <th>สิทธิ์การใช้งาน</th>
                                        <th>จัดการข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->status_name}}</td>
                                        <td>
                                            <form action="/{$user->id}/IndexUser" method="POST">
                                                <a href="{{url('/EditUser/'.$value->id)}}"
                                                    class="btn btn-warning text-light bi bi-pencil"> แก้ไข</a>
                                                @csrf
                                                <a href="{{url('/DeleteUser/'.$value->id)}}"
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