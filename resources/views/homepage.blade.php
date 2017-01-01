@extends('app-homepage')

@section('content')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                  {!! Html::image('images/homepage/desktop-tealinuxstudio.png', 'demo tealinux studio', array('class' => 'img-responsive', 'style' => 'padding-top:100px;')) !!}
                </div>
                <div class="col-lg-5 ">
                    <div class="intro-text">

                        <h1 style="font-size:50px;">Racik OS-mu sendiri!</h1>
                        <h2 class="intro-lead-in">Buat sistem oprasimu sendiri hanya dalam beberapa klik saja!</h2>
                        <div class="row">
                            <div class="col-xs-12">
                                <a style="margin:20px;" href="#fitur" class="page-scroll btn btn-xl">Pelajari</a>
                         <!-- <span style="font-size:20px;" > atau </span> -->
                        <a style="margin:20px;" href="auth/register" class="page-scroll btn btn-xl">Mulai</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </header>


    <!-- Services Section -->
    <section id="fitur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fitur</h2>
                    <h3 class="section-subheading text-muted">Kaya fitur untuk membuat racikanmu semakin mantab!</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">Custom Tema, Icon & Wallpaper</h2>
                    <p class="text-muted">OS mu mencerminkan siapa kamu, sesuaikan tampilan OS sesuai keinginanamu.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-cubes fa-stack-1x fa-inverse"></i>
                    </span>
                <h2 class="service-heading">50 + Aplikasi Favorit</h2>
                    <p class="text-muted">Lebih banyak pilihan, bikin kamu makin produktif.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span>
                    <h2 class="service-heading">Build in Cloud</h2>
                    <p class="text-muted">Biarkan server kami yang mengerjakan hal ini, duduk dan bersantailah.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="cara-kerja" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cara Kerja</h2>
                    <h3 class="section-subheading text-muted">Bikin OS dengan hanya sedikit klik-klik!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{URL::asset('images/homepage/nama.png')}}" alt="Nama">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1>1.</h1>
                                    <h2 class="subheading">Beri nama OS kamu.</h2>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Bayangkan kamu memiliki OS dengan nama kamu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{URL::asset('images/homepage/3264bit.png')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1>2.</h1>
                                    <h2 class="subheading">Pilih Arsitektur OS mu.</h2>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Kamu bisa sesuikan arsitektur OS mu sesuai kebutuhan, 32 Bit / 64 Bit. Bingung pilih yang mana ? <a href="">Bantuan</a> </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{URL::asset('images/homepage/customview.png')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1>3.</h1>
                                    <h2 class="subheading">Custom Tampilan</h2>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ubah Tema dan Wallpaper sesuai keingin kamu!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{URL::asset('images/homepage/apps.png')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1>4.</h1>
                                    <h2 class="subheading">Pilih Aplikasi</h2>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pilih hanya aplikasi yang kamu butuhkan dari berbagai kategori yang tersedia.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h2>Build</h2>

                                    <h3 style="margin-top: 0px;"><br/>Unduh / Coba</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                    <h3 class="section-subheading text-muted">Lihat berbagai varian OS yang dibuat dengan TeaLinux Studio</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/web-design.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>Front-End Web Developer Edition</b></h4>
                        <p class="">oleh Diky Arga</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/back-end.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>Back-End Web Developer Edition</b></h4>
                        <p class="text-muted">oleh M. Nurul Irfan</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/sys-admin.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>Sys Admin Edition</b></h4>
                        <p class="text-muted">oleh Setyadi Putra D.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/hacker.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>"Hacking" Edition</b></h4>
                        <p class="text-muted">oleh Anonymous</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/multimedia.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>Multimedia Edition</b></h4>
                        <p class="text-muted">oleh Bona Deny B.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{URL::asset('images/homepage/galeri/office.png')}}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><b>Kantoran Edition</b></h4>
                        <p class="text-muted">oleh Patricia Briliani</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="bg-light-gray">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><b>Buat OS versi mu Sekarang!</b></h2>
                <a style="margin:20px;" href="auth/register" class="page-scroll btn btn-xl">Mulai</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
              <a href="http://studio.tealinuxos.org/apps/TeaStudio.apk" style="font-size:18px; text-decoration:none;"><i class="fa fa-android"></i> Unduh versi Android App</a>

            </div>
        </div>
    </div>

    </section>
@endsection

@section('gallery')
<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Front-end Developer Edition</h2>
                        <p class="item-intro text-muted">OS ini Cocok buat kamu yang sering utak-atik tampilan Web.</p>
                        <img class="img-responsive img-centered" src="{{URL::asset('images/homepage/galeri/web-design.png')}}" alt="">
                        <p>Berbagai aplikasi untuk development web modern sudah included di OS sini, silahkan unduh geratis.</p>
                        <p>
                            <strong>List Aplikasi :</strong>
                            <ul class="text-left">
                                <li><i class="fa fa-firefox"></i> Firefox</li>
                                <li>Atom</li>
                                <li>Firefox</li>
                                <li>Bracket</li>
                                <li>Composer</li>
                                <li>Bower</li>
                                <li>PHPmyadmin</li>
                                <li>InkScape</li>
                                <li>Gimp</li>
                            </ul>
                        </p>
                        <ul class="list-inline">
                            <li>Rilis: 2 Februari 2016</li>
                            <li>Dibuat oleh : Diky Arga</li>
                            <li>Category: Front-End</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-edit"></i> Remix</button>
                        <a href="" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-download"></i> Unduh</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
