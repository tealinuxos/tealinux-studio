<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>TeaLinux Studio</title>
  <meta name="description" content="TeaLinux Studio adalah aplikasi untuk membuat sistem oprasi dengan mudah, hanya dengan sedikit klik-klik">
  <meta name="author" content="">

  <link rel="shortcut icon" type="image/png" href="{{URL::asset('css/homepage/favicon.png')}}" />

	<!-- css -->
  {!! Html::style('material-master/css/base.css') !!}
	<!-- <link href="../css/base.css" rel="stylesheet"> -->

	<!-- css for doc -->
	<!-- <link href="../css/project.min.css" rel="stylesheet"> -->

    @yield('add-script-at-header')
		<style media="screen">
			.content-inner{
				margin-bottom: 88px;
			}
			.snackbar{
				z-index: 9999999;
			}
		</style>

	<!-- favicon -->
	<!-- ... -->
</head>
<body class="page-brand">
	<nav class="menu menu-left nav-drawer nav-drawer-md" id="doc_menu">
		<div class="menu-scroll">
			<div class="menu-content">
				<a class="menu-logo" href="{{ url('task/new') }}"><b>TeaLinux</b> Studio</a>
				<ul class="nav">
					<li>
						<a class="waves-attach" data-toggle="collapse" href="#doc_menu_components">Tasks</a>
						<ul class="menu-collapse collapse {{{ (Request::is('task/*') ? 'in' : '') }}}" id="doc_menu_components">
							<li {{{ (Request::is('task/all') ? 'class=active' : '') }}}>
								<a class="waves-attach" href="{{ url('/task/all') }}">Lihat</a>
							</li>
							<li {{{ (Request::is('task/new') ? 'class=active' : '') }}}>
								<a class="waves-attach" href="{{ url('/task/new') }}">Buat baru</a>
							</li>



						</ul>
					</li>
					@if (Auth::user()->is_admin())
					<li>
						<a class="collapsed waves-attach" data-toggle="collapse" href="#doc_menu_extras">Users</a>
						<ul class="menu-collapse collapse" id="doc_menu_extras">
							<li>
								<a class="waves-attach" href="{{ url('/user/all') }}">Lihat</a>
							</li>
							<li>
								<a class="waves-attach" href="{{ url('/user/add-user') }}">Tambah</a>
							</li>

						</ul>
					</li>
					<li>
						<a class="collapsed waves-attach" data-toggle="collapse" href="#doc_menu_javascript">Aplikasi</a>
						<ul class="menu-collapse collapse" id="doc_menu_javascript">
							<li>
								<a class="waves-attach menu_demo">Tambah</a>
							</li>
							<li>
								<a class="waves-attach menu_demo" >Lihat</a>
							</li>
							<li>
								<a class="waves-attach menu_demo" >Kategori</a>
							</li>

						</ul>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<header class="header header-transparent header-waterfall">
		<ul class="nav nav-list pull-left hidden-md hidden-lg">
			<li>
				<a data-toggle="menu" href="#doc_menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo header-affix-hide margin-left-no margin-right-no hidden-md hidden-lg" data-offset-top="213" data-spy="affix" href="index.html">TeaLinux Studio</a>
		<span class="header-logo header-affix margin-left-no margin-right-no" data-offset-top="213" data-spy="affix">@yield('title')</span>
		<ul class="nav nav-list pull-right">
			<li>
				<a data-toggle="menu" href="#doc_menu_profile">
					<span class="access-hide"> Nama</span>
					<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="{{URL::asset('material-master/images/users/avatar-001.jpg')}}"></span>
				</a>
			</li>
		</ul>
	</header>
	<nav aria-hidden="true" class="menu menu-right" id="doc_menu_profile" tabindex="-1">
		<div class="menu-scroll">
			<div class="menu-top">
				<div class="menu-top-img">
					<img alt="John Smith" src="{{URL::asset('material-master/images/samples/landscape.jpg')}}">
				</div>
				<div class="menu-top-info">
					<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="Avatar Nama" src="{{URL::asset('material-master/images/users/avatar-001.jpg')}}"></span>{{ Auth::user()->name }}</a>
				</div>

			</div>
			<div class="menu-content">
				<ul class="nav">
					<li>
						<a class="waves-attach" href="{{ url('/user/settings/') }}">Pengaturan Akun</a>

					</li>
					<li>
						<a class="waves-attach" href="javascript:void(0)">Upload Photo</a>
					</li>
					<li>
						<a class="waves-attach" href="{{ url('/auth/logout') }}">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="content">
		<div class="content-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
						<h1 class="heading">@yield('title') </h1>
					</div>
				</div>
			</div>
		</div>
    @if ($errors->any())
    <div class='alert alert-dismissible alert-danger'>
        <button type="button" class="close" data-dismiss="alert">×</button>
      <ul class="panel-body">
        @foreach ( $errors->all() as $error )
        <li>
          {{ $error }}
        </li>
        @endforeach
      </ul>
    </div>
    @endif
      @yield('content')


	</main>
	<footer class="footer">
		<div class="container">
			<p><b>TeaLinux</b> Studio</p>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a href="{{ url('/task/new') }}" class="fbtn fbtn-brand fbtn-lg"><span class="icon">add</span></a>
		</div>
	</div>

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  {!! Html::script('material-master/js/base.min.js') !!}
	<!-- <script src="../js/base.min.js"></script> -->

  @yield('add-script-at-footer')

	<script>
	    $(document).ready(function () {
	        $("select").imagepicker();
	        $("form:not(.navbar-form) :input:visible:enabled:first").focus();
					$(".menu_demo").on("click",function(){$("body").snackbar({content:"Fitur ini dalam masa pengembangan (:"})});

	    });
	</script>

	<!-- js for doc -->
	<!-- <script src="../js/project.min.js"></script> -->
</body>
</html>
