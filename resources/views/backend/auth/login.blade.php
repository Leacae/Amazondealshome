<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="author" content="Coderthemes">
        <title>Amazon Deals - Login</title>
        <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('backend/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('backend/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('backend/css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('backend/css/responsive.css')}}" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
        <script src="{{url('backend/js/modernizr.min.js')}}"></script>
</head>

<body>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
        <div class="card-box">
                <div class="panel-heading">
                        <h3 class="text-center">Login</h3></div>
                <div class="panel-body">
                        <form class="form-horizontal m-t-20" action="{{url('dashboard/login')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                        <div class="col-xs-12">
                                                <input class="form-control" type="text" value="{{old('email')}}" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-xs-12">
                                                <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off">
                                        </div>
                                </div>
                                <p class="error">{{$errors->first()}}</p>
                                <div class="form-group text-center m-t-40">
                                        <div class="col-xs-12">
                                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button></div>
                                </div>
                        </form>
                </div>
        </div>
</div>
<script>
        var resizefunc = [];
</script>
<script src="{{url('backend/js/jquery.min.js')}}"></script>
<script src="{{url('backend/js/bootstrap.min.js')}}"></script>
<script src="{{url('backend/js/detect.js')}}"></script>
<script src="{{url('backend/js/fastclick.js')}}"></script>
<script src="{{url('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{url('backend/js/jquery.blockUI.js')}}"></script>
<script src="{{url('backend/js/waves.js')}}"></script>
<script src="{{url('backend/js/wow.min.js')}}"></script>
<script src="{{url('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('backend/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('backend/js/jquery.core.js')}}"></script>
<script src="{{url('backend/js/jquery.app.js')}}"></script>
</body>

</html>