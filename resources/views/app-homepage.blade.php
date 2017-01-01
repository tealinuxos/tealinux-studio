<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TeaLinux Studio adalah aplikasi untuk membuat sistem oprasi dengan mudah, hanya dengan beberap klik saja.">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/png" href="{{URL::asset('css/homepage/favicon.png')}}" />


    <title>TeaLinux Studio</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/homepage/css/bootstrap.min.css') !!}


    <!-- Custom CSS -->
    {!! Html::style('css/homepage/css/agency.css') !!}


    <!-- Custom Fonts -->
    {!! Html::style('css/homepage/font-awesome/css/font-awesome.min.css') !!}

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('onpage-css')

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="padding: 0px;" class="navbar-brand page-scroll" href="#page-top" src="{{URL::asset('css/homepage/img/logos/tealinuxstudio.png')}}">
                <!-- <a style="color:black;" class="navbar-brand page-scroll" href="#page-top">TeaLinux Studio</a>  -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="{{ url('/') }}#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ (Request::is('/') ? '' : url('/')) }}}#fitur">Fitur</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ (Request::is('/') ? '' : url('/'))  }}}#cara-kerja">Cara Kerja</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ (Request::is('/') ? '' : url('/'))  }}}#portfolio">Galeri</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ (Request::is('/') ? '' : url('/')) }}}#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/auth/login') }}">Masuk</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/auth/register') }}">Daftar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Hak Cipta &copy; TeaLinux Studio | 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">

                        <li><a href="#">Tentang Kami</a>
                        </li>
                        <li><a href="#">Bergabung</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>


  @yield('gallery')

    <!-- jQuery -->
    {!! Html::script('css/homepage/js/jquery.js') !!}


    <!-- Bootstrap Core JavaScript -->

    {!! Html::script('css/homepage/js/bootstrap.js') !!}


    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

      {!! Html::script('css/homepage/js/classie.js') !!}

      {!! Html::script('css/homepage/js/cbpAnimatedHeader.js') !!}

    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    {!! Html::script('css/homepage/js/agency.js') !!}


</body>

</html>
