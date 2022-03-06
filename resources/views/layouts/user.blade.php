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
                <a href="./">
                    <div class="csttc">ວິທະຍາໄລຄູສົງຈຳປາສັກ</div>
                </a>
                <a href="./" class="">
                    <div class="vision">
                        ຮຽນຮູ້ດີ ມີວິໄນ ຮູ້ນຳໃຊ້ຫຼັກວິຊາການສຶບສານວັດທະນະທຳຂອງຊາດ
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- ----------------------- Nav Bar ------------------------ -->

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

    <!--  footer -->
    <div class="container-fluid ">
        <div class="row footer pt-5">
            <div class="col-lg-4 col-12">
                <div class="websites">
                    <div class="title-footer">ເວບໄຊອື່ນໆ</div>
                    <div class="sub-footer">
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກະຊວງສຶກສາທິການ ແລະ ກິລາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i> &nbsp;ກົມສ້າງຄູ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກົມກິດຈະການນັກສຶກສາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລສົງອົງຕື້</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລຄູປາກເຊ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລຈຳປາສັກ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລແຫ່ງຊາດ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="websites">
                    <div class="title-footer">ເວບໄຊອື່ນໆ</div>
                    <div class="sub-footer">
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກະຊວງສຶກສາທິການ ແລະ ກິລາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i> &nbsp;ກົມສ້າງຄູ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກົມກິດຈະການນັກສຶກສາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລສົງອົງຕື້</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລຄູປາກເຊ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລຈຳປາສັກ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລແຫ່ງຊາດ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="contract">
                    <div class="title-footer">ປະສານງານ</div>
                    <div class="sub-footer">
                        <h5>ຫ້ອງການບໍລິຫານ, ວິທະຍາໄລຄູສົງຈຳປາສັກ ວັດຫຼວງປາກເຊ</h5>
                        <p>
                            <a href="https://www.facebook.com/LFOoC/" target="_blank">
                                <i class="fab fa-facebook"></i>&nbsp; Facebook</a>
                        </p>
                        <p>
                            <a href="#"><i class="fas fa-globe"></i>&nbsp; Website: CSTTC.edu.la</a>
                        </p>
                        <p>
                            <a href="mailto:email.com"><i class="fas fa-envelope"></i>&nbsp; Email:
                                csttc@gmail.com</a>
                        </p>
                        <p>
                            <a href="tel:031410029"><i class="fas fa-phone-square-alt"></i>&nbsp; Tel : 031 41 00
                                29</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <p>
            @ 2021 Champasak Sangha Teacher Taining College. Design by: Vilaphong &
            Develop by: Sonephet
        </p>
    </div>


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/68182a35eb.js" crossorigin="anonymous"></script>

    <!-- JQuery Ajax -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- jquery fancyBox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- pdf object  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js" integrity="sha512-K4UtqDEi6MR5oZo0YJieEqqsPMsrWa9rGDWMK2ygySdRQ+DtwmuBXAllehaopjKpbxrmXmeBo77vjA2ylTYhRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Owl Carousel -->
    <script src="assets/js/Owl.Carousel.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="assets/js/navbar.js"></script>
    <script src="assets/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/dataTables.min.js"></script>

    <!-- Data table -->
    <script>
        $(document).ready(function() {
            $('#dataTableId').DataTable();
        });

        /* ============= scroll toTop =============== */
        window.addEventListener("scroll", () => {
            const toTop = document.querySelector("#toTop");
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
        });

        $("#toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 800);
        });
    </script>


    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}">
    </script>

</body>

</html>