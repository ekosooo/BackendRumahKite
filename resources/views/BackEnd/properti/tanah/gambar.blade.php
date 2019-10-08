<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Tanah </title>
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
    <style>
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn1 {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }
    </style>

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

                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-8">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-block">
                                                        <form action="{{route('gambar.store')}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <div class="card-body text-center" style="background:#FAFAFA">
                                                                        <div class="upload-btn-wrapper">
                                                                            <button class="btn1">Upload Gambar</button>
                                                                            <input type='file' onchange="readURL(this);" name="gambar" id="gambar"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <img id="blah" src="#" alt="your image" />
                                                                </div>
                                                            </div>


                                                            <div class="form-group" style="float: right;">
                                                                <div class="col-sm-12">
                                                                    <button type="submit" class="btn btn-sm btn-primary">SUBMIT</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2"></div>

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


<!-- Custom js -->
<script src="{{asset('files\assets\pages\forms-wizard-validation\form-wizard.js')}}"></script>
<script src="{{asset('files\assets\js\pcoded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files\assets\js\script.js')}}"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>

</html>



