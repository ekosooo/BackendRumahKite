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
                                        {{--                                        starttabel--}}
                                        <div class="col-sm-12">
                                            <!-- HTML5 Export Buttons table start -->
                                            <div class="card">
                                                <div class="card-header table-card-header">
                                                    <h5>Data Area</h5><br><br>
                                                    <a href="{{route('area.add')}}" class="btn btn-sm btn-primary">Tambah</a>
                                                </div>

                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Area</th>
                                                                <th>Latitude</th>
                                                                <th>Longitude</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            @foreach($area as $value)
                                                                <tr>
                                                                    <td>{{++$i}}</td>
                                                                    <td>{{$value->area_name}}</td>
                                                                    <td>{{$value->area_lat}}</td>
                                                                    <td>{{$value->area_long}}</td>
                                                                    <td>
                                                                        <a href="{{route('area.show', $value->area_id)}}" class="btn btn-sm btn-success">Edit</a>
                                                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                                                    </td>
                                                                </th>
                                                                @endforeach
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- HTML5 Export Buttons end -->
                                        </div>
                                        {{--                                      endtabel  --}}

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



