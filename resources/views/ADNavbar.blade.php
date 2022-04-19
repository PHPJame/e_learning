<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>E-learning</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('css/thaifont.css') }}">

    <style>
    body {
        font-family: "Sarabun";
    }

    .btn {
        font-family: "Sarabun";
    }

    .card-title {
        font-size: 20px;
    }
    </style>

</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Computer Education</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">

                <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-fill"> ยินดีต้อนรับ :: {{ Auth::user()->name }}</i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-4" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item bi bi-people" href="#"> จัดการโปรไฟล์</a></li>
                            <li><a class="dropdown-item bi bi-box-arrow-left" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> ออกจากระบบ</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-2">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-house-door"></i></span>
                            <span>หน้าแรก</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('IndexUser') }}" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-people"></i></span>
                            <span>จัดการสมาชิก</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('IndexCouse') }}" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-book"></i></span>
                            <span>จัดการรายวิชา</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link active" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-stickies"></i></span>
                            <span>จัดการบทเรียน</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{ route('ADIndexTopic') }}" class="nav-link px-3 active">
                                        <span class="me-2"><i class="bi bi-record"></i></span>
                                        <span>หัวข้อบทเรียน</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3 active">
                                        <span class="me-2"><i class="bi bi-record"></i></span>
                                        <span>แบบทดสอบ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3 active">
                                        <span class="me-2"><i class="bi bi-record"></i></span>
                                        <span>รายชื่อผู้ลงทะเบียน</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ mix('js/fontawesome.js') }}"></script>

</body>

</html>