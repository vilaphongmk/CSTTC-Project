<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">


</head>

<body>
    <!-- Header logo -->
    <div class="container-fluid">

        <div class="row header-big">
            <div class="col-lg-2 col-12 logo">
                <a href="./">
                    <img src="{{asset('/asset/images/logo/CSC.png')}}" />
                </a>
            </div>
            <div class="col-lg-10 col-12 header">
                <div class="csttc">ວິທະຍາໄລຄູສົງຈຳປາສັກ</div>
                <div class="vision">
                    ຮຽນຮູ້ດີ ມີວິໄນ ຮູ້ນຳໃຊ້ຫຼັກວິຊາການສຶບສານວັດທະນະທຳຂອງຊາດ
                </div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">CSTTC</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id=navbarToggle>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ຫຼັກສູດ</a>
                            <ul class="dropdown">
                                <li class="dropdown-item">ພູດ</li>
                                <li class="dropdown-item">ພາສາອັງກິດ</li>
                                <li class="dropdown-item">ພາສາລາວ</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')

        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>