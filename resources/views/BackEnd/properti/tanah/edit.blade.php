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
                                                    <h5>Form Data Tanah</h5>
                                                    <div class="card-block">
                                                        @foreach($tanah as $value2)
                                                        <form action="{{route('tanah.update', 'tanah')}}" method="post">
                                                            {{method_field('PUT')}}
                                                            {{csrf_field()}}

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Kategori</label>
                                                                <div class="col-sm-12">
                                                                    <select name="cat" id="cat" class="form-control">
                                                                        <option value="">Pilih Kategori..</option>
                                                                        @foreach($cat as $value)
                                                                            <option value="{{$value->cat_id}}" {{ ( $value->cat_id == $value2->cat_id) ? 'selected' : '' }}>{{$value->cat_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Luas Tanah</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.g 14" name="land_size" id="land_size" value="{{$value2->land_size}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Status</label>
                                                                <div class="col-sm-12">
                                                                    <select name="status" id="status" class="form-control">
                                                                        <option value="">Pilih status..</option>
                                                                        <option value="jual" {{ ( 'jual' == $value2->status) ? 'selected' : '' }}>Jual</option>
                                                                        <option value="sewa" {{ ( 'sewa' == $value2->status) ? 'selected' : '' }}>Sewa</option>
                                                                        <option value="jualsewa" {{ ( 'jualsewa' == $value2->status) ? 'selected' : '' }}>Jual/Sewa</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display: none" id="jual">
                                                                <label class="col-sm-12 col-form-label">Harga Jual</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.g 125JT" name="cash_price" id="cash_price" value="{{$value2->cash_price}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group status2" style="display: none" id="sewa">
                                                                <label class="col-sm-12 col-form-label">Harga Sewa</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.g 125/Tahun" name="rent_price" id="rent_price" value="{{$value2->rent_price}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Mitra</label>
                                                                <div class="col-sm-12">
                                                                    <select name="company" id="company" class="form-control">
                                                                        <option value="">Pilih Mitra..</option>
                                                                        @foreach($company as $value)
                                                                            <option value="{{$value->company_id}}" {{ ( $value->company_id == $value2->company_id) ? 'selected' : '' }}>{{$value->company_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Area</label>
                                                                <div class="col-sm-12">
                                                                    <select name="area" id="area" class="form-control">
                                                                        <option value="">Pilih Area..</option>
                                                                        @foreach($area as $value)
                                                                            <option value="{{$value->area_id}}" {{ ( $value->area_id == $value2->area_id) ? 'selected' : '' }}>{{$value->area_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Tipe Sertifikat</label>
                                                                <div class="col-sm-12">
                                                                    <select name="type_certificate" id="type_certificate" class="form-control">
                                                                        <option value="">Pilih Tipe Sertifikat..</option>
                                                                        <option value="SH" {{ ( 'SH' == $value2->type_certificate) ? 'selected' : '' }}>SH</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Latitude</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.x -09.001231" name="lat" id="lat" value="{{$value2->lat}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Longitude</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" placeholder="e.x 16.012111" name="long" id="long" value="{{$value2->long}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Alamat</label>
                                                                <div class="col-sm-12">
                                                                     <textarea class="form-control" id="address" name="address" cols="30"
                                                                               rows="5">{{$value2->address}}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-12 col-form-label">Deskripsi</label>
                                                                <div class="col-sm-12">
                                                                     <textarea class="form-control" id="description" name="description" cols="30"
                                                                               rows="5">{{$value2->description}}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="float: right">
                                                                <div class="col-sm-12">
                                                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        @endforeach
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

{{--hide show selector--}}
<script>
    $(document).ready(function(){
        $('#status').show(function() {
            if ( this.value == 'jualsewa')
            {
                $("#jual").show();
                $("#sewa").show();
            }
            if (this.value == 'jual')
            {
                $("#jual").show();
                $("#sewa").hide();
            }
            if (this.value == 'sewa')
            {
                $("#sewa").show();
                $("#jual").hide();
            }
            else
            {
                $("#divid").hide();
            }
        });
    });
</script>

<!--Forms - Wizard js-->
<script src="{{asset('files\bower_components\jquery.cookie\js\jquery.cookie.js')}}"></script>
<script src="{{asset('files\bower_components\jquery.steps\js\jquery.steps.js')}}"></script>
<script src="{{asset('files\bower_components\jquery-validation\js\jquery.validate.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('files\assets\pages\forms-wizard-validation\form-wizard.js')}}"></script>
<script src="{{asset('files\assets\js\pcoded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files\assets\js\script.js')}}"></script>



</body>

</html>



