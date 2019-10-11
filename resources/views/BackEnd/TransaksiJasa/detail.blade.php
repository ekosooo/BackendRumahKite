<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Jasa </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <!-- list css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\list-scroll\list.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\stroll\css\stroll.css')}}">
    @include('BackEnd.master.style')
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        {{--        STARTHEADER--}}
        @include('BackEnd/master/header')
        {{--        ENDHEADER--}}
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

            {{--        STARTSIDEBAR--}}
            @include('BackEnd/master/sidebar')
            {{--        STARTSIDEBAR--}}

            <!-- STARTCONTENT -->
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    @yield('content')
                                    <div class="row">

                                        <div class="col-md-12">
                                            <!-- Product detail page start -->
                                            <div class="card product-detail-page">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-xs-12">
                                                            <div class="port_details_all_img row">
                                                                <div class="col-lg-12 m-b-15">

                                                                </div>
                                                                <div class="col-lg-12 product-right">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                            <div class="row">
                                                                <div>
                                                                    <div class="col-lg-12">
                                                                        <span class="txt-muted d-inline-block">Status : <a href="#!"> Menunggu </a> </span>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <h4 class="pro-desc">Pemesanan Tukang Cat</h4>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i>Rp. 130000</span>
                                                                        <hr>
                                                                        <p>Disini Isi Keterangan dari konsumen
                                                                        </p>
                                                                        <hr>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product detail page end -->

                                            <!-- Nav tabs start-->
                                            <div class="card product-detail-page">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Detail Pemesanan</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item m-b-0">
                                                        <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Tindakan</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Nav tabs start-->

                                            <!-- Nav tabs card start-->
                                            <div class="card">
                                                <div class="card-block">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane active" id="description" role="tabpanel">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="col-lg-2">Kode Pesanan</td>
                                                                    <td class="col-lg-10">#CAT00123</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Nama</td>
                                                                    <td class="col-lg-10">Rizqi Mauludin</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Telepon</td>
                                                                    <td class="col-lg-10">+628999327717</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Tanggal</td>
                                                                    <td class="col-lg-10">2019-08-18</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Hari</td>
                                                                    <td class="col-lg-10">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Harga / Hari</td>
                                                                    <td class="col-lg-10">Rp. 130000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Total</td>
                                                                    <td class="col-lg-10">Rp. 300000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Alamat</td>
                                                                    <td class="col-lg-10">Jalan Adisucipto Gg.Terata No.25</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Tukang</td>
                                                                    <td class="col-lg-10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">No Telepon Tukang</td>
                                                                    <td class="col-lg-10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Status</td>
                                                                    <td class="col-lg-10">Menunggu</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="tab-pane" id="review" role="tabpanel">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Nav tabs card end-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ENDCONTENT -->

            </div>
        </div>

    </div>
</div>


<!-- Required Jquery -->
@include('BackEnd.master.script')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>



