<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Coderthemes">
		<title>Amazondealshome- Admin Dashboard </title>
		<link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/core.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/components.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/pages.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/responsive.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('backend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<script src="{{url('backend/js/modernizr.min.js')}}"></script>
	</head>

	<body class="fixed-left">
		<div id="wrapper">
			<div class="topbar">
				<div class="topbar-left">
					<div class="text-center">
						<a href="" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<div class="">
							<div class="pull-left"><button class="button-menu-mobile open-left"><i class="ion-navicon"></i></button> <span class="clearfix"></span></div>
							<ul class="nav navbar-nav navbar-right pull-right">
								<li class="hidden-xs">
									<a href="javascript:void(0);" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="left side-menu">
				<div class="sidebar-inner slimscrollleft">
					<div id="sidebar-menu">
						<ul>
							<li class="text-muted menu-title">Navigation</li>
							<li class="has_sub">
								<a href="javascript:void(0);" class="waves-effect active"><i class="ti-shopping-cart"></i><span>eCommerce</span></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="content-page">
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Orders</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{url('/')}}">Ubold</a>
									</li>
									<li class="active">eCommerce</li>
								</ol>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card-box">
									<div class="row m-t-10 m-b-10">
										<div class="col-sm-6 col-lg-8">
											<form role="form" action="{{url('/dashboard')}}" method="post">
												<div class="form-group contact-search m-b-30">
													{{csrf_field()}}
													<input type="text" name="keyword" value="{{$keyword}}" id="search" class="form-control" placeholder="Search..." autocomplete="off">
													<button type="submit" class="btn btn-white">
														<i class="fa fa-search"></i>
													</button>
												</div>
											</form>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-actions-bar">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Order Id</th>
													<th>Order Date</th>
													<th>Order Screenshot</th>
													<th style="min-width: 80px">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($activitys as $activity)
													<tr>
														<td>{{$activity->name}}</td>
														<td>{{$activity->email}}</td>
														<td>
															{{$activity->order_id}}
														</td>
														<td>
															{{$activity->order_date}}
														</td>
														<td>
															<a href="{{url($activity->order_screenshot)}}" class="image-popup">
																<img src="{{url($activity->order_screenshot)}}" class="thumb-md" alt="">
															</a>
														</td>
														<td>
															<a href="javascript:void(0);" class="table-action-btn"><i class="md md-close"></i></a>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
										{{$activitys->links()}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer text-right">2015 © Amazondealshome.com.</footer>
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
		<script src="{{url('backend/js/custombox.min.js')}}"></script>
		<script src="{{url('backend/js/legacy.min.js')}}"></script>
		<script src="{{url('backend/js/jquery.magnific-popup.min.js')}}"></script>
	   <script>
		   $(function () {
			   $('.image-popup').magnificPopup({
				   type: 'image',
				   closeOnContentClick: true,
				   mainClass: 'mfp-fade',
				   gallery: {
					   enabled: true,
					   navigateByImgClick: true,
					   preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
				   }
			   });
		   });
	   </script>
	</body>

</html>