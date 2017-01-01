<!DOCTYPE html>

<html>
<head>
  <title>TeaLinux Studio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="TeaLinux Studio adalah aplikasi untuk membuat sistem oprasi dengan mudah, hanya dengan sedikit klik-klik">
  <meta name="author" content="">

  <link rel="shortcut icon" type="image/png" href="{{URL::asset('css/homepage/favicon.png')}}" />

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  {!! Html::style('css/material/css/bootstrap-material-design.css') !!}
  {!! Html::style('css/material/css/ripples.min.css') !!}
  {!! Html::style('css/material/css/snackbar.min.css') !!}

  @yield('add-script-at-header')


  <!-- Dropdown.js -->
  <link href="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- Page style
  <link href="index.css" rel="stylesheet">

  -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<body>

<!--

Test case

-->
<div class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><b>TeaLinux</b> Studio</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">

        @if(Auth::guest())

        <li {{{ (Request::is('tentang') ? 'class=active' : '') }}}><a href="{{ url('/tentang') }}">Tentang</a></li>
        <li {{{ (Request::is('event') ? 'class=active' : '') }}}><a href="{{ url('/event') }}">Kegiatan</a></li>
        <li {{{ (Request::is('kontak') ? 'class=active' : '') }}}><a href="{{ url('/kontak') }}">Kontak</a></li>
        @endif

            @if (Auth::user()->is_admin())

        <li class="dropdown">
          <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
          <ul class="dropdown-menu">


            <li><a href="{{ url('/user/all') }}"><i class="material-icons">face</i> Lihat Semua Pengguna</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Tasks <b class="caret"></b></a>
            <ul class="dropdown-menu">


              <li><a href="{{ url('/task/new') }}"><i class="material-icons">face</i> Buat Task Baru</a></li>
                <li><a href="{{ url('/task/all') }}"><i class="material-icons">face</i> Manage Task</a></li>
              </ul>
            </li>
              @endif





      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input class="form-control col-md-8" placeholder="Cari  " type="text">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
        <li {{{ (Request::is('auth/login') ? 'class=active' : '') }}}>
          <a href="{{ url('/auth/login') }}">Masuk</a>
        </li>
        <li {{{ (Request::is('auth/register') ? 'class=active' : '') }}}>
          <a href="{{ url('/auth/register') }}">Daftar</a>
        </li>
        @else

        <li class="dropdown">
          <a href="javascript:void(0)" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
            <b class="caret"></b></a>
          <ul class="dropdown-menu">

            <li class="divider"></li>

            <li>
              <a href="{{ url('/user/'.Auth::user()->username) }}"><i class="material-icons">face</i> Profil saya</a>
            </li>
            <li>
              <a href="{{ url('/user/settings/') }}"><i class="material-icons">settings</i> Pengaturan</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ url('/auth/logout') }}"><i class="material-icons">open_in_new</i>  Keluar</a>
            </li>


          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</div>




<div class="container">

  @if(Request::is('/'))
  <div class="jumbotron">
    <h2>Doscom - Dinus Open Source Community</h2>
    <blockquote >

    <p>"Walaupun kami beda Sistem Operasi & Software Aplikasi dengan kebanyakan orang, tapi bukan berarti kami terpinggirkan. Justru kami merasa didepan untuk siap sedia memberikan solusi sekaligus pembelajaran keterbukaan tentang ilmu & Teknologi Informasi."</p>
  </blockquote>
    <p><a href="/tentang" class="btn btn-primary btn-lg">Cari tau lebih dalam tentang doscom</a></p>
  </div>
  @else
  @endif


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
  <div class="row">
    <!-- Config for small content -->
    @if(Request::is('auth/register') || Request::is('auth/login') || Request::is('user/add-user') || Request::is('user/edit/*') || Request::is('user/settings') || Request::is('task/new'))
      <?php $small = true; ?>
    @else
      <?php $small = false; ?>

    @endif
    @if($small)
    <div class="col-md-5 col-md-offset-3">
    @else
    <div class="col-md-10 col-md-offset-1">
    @endif
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2>@yield('title')</h2>
          @yield('title-meta')
        </div>
        <div class="panel-body">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

    @yield('custom-content')
  </div>

  </div>
  <div class="row">

    @if($small)
    <div class="col-md-10 col-md-offset-3">
    @else
    <div class="col-md-10 col-md-offset-1">
    @endif
      <p>Copyright © 2016 | Crafted with &hearts; by Project Tea</p>
    </div>
  </div>
</div>

<!--


Scripts


-->
<!-- Twitter Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
{!! Html::script('css/material/js/material.js') !!}
{!! Html::script('css/material/js/ripples.min.js') !!}
{!! Html::script('css/material/js/snackbar.min.js') !!}

@yield('add-script-at-footer')


<!-- Mengeluarkan pesan -->
@if (Session::has('message'))
<script>
$(document).ready(function() {
  $.snackbar({content: "{{ Session::get('message') }}"});
});
</script>

<!--<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
  <p class="panel-body">
    {{ Session::get('message') }}
  </p>
</div>-->
@endif

<!-- Buat focus ke field pertama di setiap ada form yang di load -->
<script>
    $(document).ready(function () {
        $("select").imagepicker();
        $("form:not(.navbar-form) :input:visible:enabled:first").focus();
    });
</script>
<script>
  $.material.init();
</script>

<!-- Sliders -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

</body>
</html>
