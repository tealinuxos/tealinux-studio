@extends('app-dashboard')

@section('add-script-at-header')
<style media="screen">
#div-top{
  width:60px;
  height:85px;

  position:absolute;top:0px;
  left:750px;z-index:1;
  background-image: url('{{URL::asset('/images/tea/asap.png')}}');
  background-size: 60px 85px;
}
#div-bottom{width:250px;
  height:150px;

  position:absolute;
  top:235px;
  left:500px;
  z-index:2;

  background-image: url('{{URL::asset('/images/tea/cangkir.png')}}');
  background-size: 250px 150px;

}

.animasi {
    width: 100px;
    height: 100px;

    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {left:570px; top:235px; opacity:1;}

    50%  { left:570px;}

    100% {left:570px; top:0px; opacity:0;}
}

/* Standard syntax */
@keyframes example {
    0%   {left:570px; top:235px;opacity:1;}

    50%  { left:570px; }

    100% {left:570px; top:0px;opacity:0;}
}

.content-heading{
  z-index: 3;
}

.row h5{
  margin-top: 10px;
}
.btnNext{
  margin: 20px;
  border: 2px solid;
}
</style>
@endsection

@section('title')
OS mu siap dinikmati..
@endsection

@section('content')



<div class="container">

   <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
         <section class="content-inner margin-top-no">
           <h3>Selamat menikmati</h3>

           <a class="btn btn-flat btn-green waves-attach btnNext pull-left" data-toggle="modal" href="#demo"><span class="icon icon-lg">ondemand_video</span> Coba </a>
           <a href="http://pinguin.dinus.ac.id/iso/tealinuxos/TeaLinuxOS-7.1-amd64.iso" class="btn btn-flat btn-green waves-attach btnNext pull-left"><span class="icon icon-lg">file_download</span> Unduh </a>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <h5>Butuh bantuan meng- isntall ?</h5>
           <p>Lihat video tutorial berikut :</p>
           <a style="background:#d6d6d6;" class="btn btn-flat collapsed waves-attach waves-button" data-toggle="modal" href="#tutorial_install">Bantuan</span></a>
              <div id="div-top" class="animasi"></div>
               <div id="div-bottom"></div>


         </section>

      </div>
   </div>
</div>
<div aria-hidden="true" class="modal fade" id="tutorial_install" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<iframe class="iframe-seamless" src="https://www.youtube.com/embed/vxo8sVi-_8U" title="Modal with iFrame"></iframe>
			</div>
		</div>
	</div>
  <div aria-hidden="true" class="modal fade" id="demo" role="dialog" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-heading">
					<a class="modal-close" data-dismiss="modal">×</a>
					<h2 class="modal-title">Maaf ) :  | Fitur ini belum tersedia karena keterbatasan resource di sisi server.</h2>
				</div>
				<div class="modal-inner">
					<p>Kami butuh bantuan mu untuk membuat <b> TeaLinux </b>Studio lebih baik lagi</p>
				</div>
				<div class="modal-footer">
					<p class="text-right"><button class="btn btn-flat btn-brand waves-attach waves-button" data-dismiss="modal" type="button">Baiklah</button><button class="btn btn-flat btn-brand waves-attach waves-button" data-dismiss="modal" type="button">Bantu</button></p>
				</div>
			</div>
		</div>
	</div>



@endsection

@section('add-script-at-footer')

@endsection
