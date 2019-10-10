<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Keahlian </title>
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
<!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\css\component.css')}}">
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
                                        {{-- starttabel--}}
                                        <div class="col-sm-8">
                                            <!-- HTML5 Export Buttons table start -->
                                            <div class="card">
                                                <div class="card-header table-card-header">
                                                    <h5>Data Keahlian</h5><br><br>
                                                    <button class="btn btn-sm btn-primary waves-effect" data-toggle="modal" data-target="#tambah-Modal">Tambah</button>
                                                </div>

                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Keahlian</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            @foreach($skill as $value)
                                                                <tr>
                                                                    <td>{{++$i}}</td>
                                                                    <td>{{$value->skill_name}}</td>
                                                                    <td>
                                                                        <a href="" class="btn btn-sm btn-success" data-skill_name="{{ $value->skill_name }}" data-skill_id="{{ $value->skill_id }}"
                                                                           data-toggle="modal" data-target="#edit-modal" >Edit</a>
                                                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                    <nav aria-label="Page navigation example" style="float: right">
                                                        <ul class="pagination">
                                                            {{ $skill->links() }}
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- HTML5 Export Buttons end -->
                                        </div>
                                        {{--  endtabel  --}}
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

<!-- Modal static-->
<div class="modal fade" id="tambah-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Keahlian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('skill.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-12 col-form-label">Keahlian</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="e.x Ngecat" name="skill_name" id="skill_name">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{--modal edit--}}
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Keahlian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('skill.update', 'skill')}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-12 col-form-label">Keahlian</label>
                        <div class="col-sm-12">
                            <input type="hidden" name="skill_id" id="skill_id" value="">
                            <input type="text" class="form-control" name="skill_name" id="skill_name">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
            </div>
            </form>
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
<!-- modalEffects js nifty modal window effects -->
<script type="text/javascript" src="{{asset('files\assets\js\modalEffects.js')}}"></script>
<script type="text/javascript" src="{{asset('files\assets\js\classie.js')}}"></script>

<script>
    $('#edit-modal').on('show.bs.modal', function (event) {
        console.log('Modal Opened');
        var button = $(event.relatedTarget)
        var skill_id = button.data('skill_id')
        var skill_name = button.data('skill_name')

        var modal = $(this)
        modal.find('.modal-body #skill_name').val(skill_name);
        modal.find('.modal-body #skill_id').val(skill_id);
    })
</script>

</body>

</html>




