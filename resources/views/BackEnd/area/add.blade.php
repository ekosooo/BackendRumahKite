<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Area </title>
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
                                                    <h5>Form Data Area</h5>
                                                    <div class="card-block">
                                                        <form action="{{route('area.store')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Area</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.g Pontianak Barat" name="area_name" id="area_name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Latitude</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.x -09.001231" name="area_lat" id="area_lat">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Longitude</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.x 16.012111" name="area_long" id="area_long">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button type="submit" class="btn btn-sm btn-primary">SUBMIT</button>
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




