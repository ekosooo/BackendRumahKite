<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Tukang</title>
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

                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-6">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Form Data Tukang</h5>
                                                    <div class="card-block">
                                                        <form action="{{route('tukang.store')}}" method="post">
                                                            {{csrf_field()}}

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Nama</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.g Eko Alfianto" name="handyman_name" id="handyman_name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Telepon</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control" placeholder="+628999xxxx" name="handyman_phone" id="handyman_phone">
                                                                    </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Harga / hari</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="150000" name="handyman_price" id="handyman_price">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Alamat</label>
                                                                <div class="col-sm-12">
                                                                    <textarea name="handyman_address" id="handyman_address" cols="30"
                                                                              rows="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="float: right">
                                                                <div class="col-sm-12">
                                                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3"></div>

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




