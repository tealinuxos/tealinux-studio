@extends('app-dashboard')

@section('add-script-at-header')
<style media="screen">
#div-top{
  width:100px;
  height:400px;

  position:absolute;top:0px;
  left:750px;z-index:1;
  background-image: url('{{URL::asset('/images/tea/teh.png')}}');
  background-size: 100px 400px;
}
#div-bottom{width:250px;
  height:150px;

  position:absolute;
  top:235px;
  left:300px;
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
    0%   {left:750px; top:-40px;}

    50%  { left:750px; top:80px;}

    100% {left:750px; top:-40px;}
}

/* Standard syntax */
@keyframes example {
    0%   {left:750px; top:-40px;}

    50%  { left:750px; top:80px;}

    100% {left:750px; top:-40px;}
}

.content-heading{
  z-index: 3;
}

.row h5{
  margin-top: 10px;
}
</style>
@endsection

@section('title')
OS mu sedang kami racik!
@endsection

@section('content')



<div class="container">
  <div id="div-top" class="animasi"></div>
   <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
         <section class="content-inner margin-top-no">
           <h3>Duduk dan Bersantailah</h3>
           <h5>Kami akan mengabari mu ketika OS kamu siap</h5>
           <p>* Melaui notifikasi & email</p>

               <div id="div-bottom"></div>


         </section>

      </div>
   </div>
</div>


  <div aria-hidden="true" class="modal fade" id="demo" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-heading">
          <a class="modal-close" data-dismiss="modal">×</a>
          <h2 class="modal-title">Sementara ini, Kamu tidak dapat melihat apa yg dikerjakan server. Untuk itu kami membuat video ini untukmu.</h2>
        </div>
        <div style="height:300px;" class="modal-inner">
          <iframe class="iframe-seamless" src="https://www.youtube.com/embed/4b3t6bvvXXs" title="Modal with iFrame"></iframe>
        </div>
        <div class="modal-footer">
          <p class="text-right"><button class="btn btn-flat btn-brand waves-attach waves-button" data-dismiss="modal" type="button">Oke</button></p>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('add-script-at-footer')

<script type="text/javascript">
$( document ).ready(function() {
  setTimeout(function(){
    $("#demo").modal('show');
  }, 5000)
});
</script>

@endsection
