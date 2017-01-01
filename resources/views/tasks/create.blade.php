@extends('app-dashboard')

@section('add-script-at-header')

{!! Html::style('js/image-picker/image-picker.css') !!}
<style media="screen">
    @media (max-width: 480px){
      .btnNext, .btnPrevious{
        font-size: 12px;
      }
    }
  .btnNext{
    margin: 20px;
    border: 2px solid;
  }
  .btnPrevious{
    margin: 20px;
    border: 2px solid;
  }
  .buildBtn{
    padding: 10px;
    font-size: 20px;
    margin: 10px;
  }
  .saveBtn{
    margin: 10px;
  }
  .snackbar{
    z-index: 99999;
  }
  #tab2 .thumbnails li img{
  display: block;
    max-width: 100%;
    width: 250px;
    height: auto;
    }

    .judul-sesi{
      color:#2c3e50;
      border: 2px solid #2ecc71;
      text-decoration:none;
      padding: 6px;
    }
</style>


@endsection

@section('title')
Mulai Racik OS-mu
@endsection

@section('content')



<div class="container">
   <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
         <section class="content-inner margin-top-no">
            <form action="/task/new" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="deskripsi" value="OS ini aku rancang buat kamu, iya kamu..">
               <div class="card">
                 <div class="card-main">
                   <div class="card-inner">
                     <div class="form-group form-group-label">
                        <label class="floating-label" for="..."> Beri Nama OS kamu </label>
                        <input required="required" value="{{ old('nama_os') }}" placeholder="Beri nama OS kamu.." type="text" name = "nama_os" class="form-control" />
                     </div>

                   </div>
                 </div>
               </div>

               <div class="card">
                  <div class="card-main">
                     <nav class="tab-nav margin-top-no">
                        <ul class="nav nav-justified nav-tabs">
                           <li class="active"><a href="#tab1" data-toggle="tab">Arsitektur</a></li>
                           <li><a href="#tab2" data-toggle="tab">Tampilan</a></li>
                           <li><a href="#tab3" data-toggle="tab">Aplikasi</a></li>
                        </ul>
                     </nav>
                     <div class="card-inner">
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab1">
                              <div class="form-group">
                                 <div class="radiobtn radiobtn-adv">
                                    <label for="input_radio_example_1">
                                    <input class="access-hide" id="input_radio_example_1" name="input_radio_example" type="radio">32 Bit
                                    <span class="radiobtn-circle"></span><span class="radiobtn-circle-check"></span>
                                    </label>
                                 </div>
                                 <div class="radiobtn radiobtn-adv">
                                    <label for="input_radio_example_2">
                                    <input checked class="access-hide" id="input_radio_example_2" name="input_radio_example" type="radio">64 Bit
                                    <span class="radiobtn-circle"></span><span class="radiobtn-circle-check"></span>
                                    </label>
                                 </div>
                              </div>
                              <p>Bingung / tidak paham ?<br/><br/><a style="background:#d6d6d6;" class="btn btn-flat collapsed waves-attach waves-button" data-toggle="collapse" href="#doc_collapse_example"><span class="collapsed-hide">Tutup</span><span class="collapsed-show">Bantuan</span></a></p>
                              <div class="collapse collapsible-region" id="doc_collapse_example">
                                 <h4 style="margin-top:0px;">Perbedaan 32 Bit dan 64 Bit</h4>
                                 <p>Jika RAM kamu lebih dari 3 GB, kami sarankan untuk memilih 64 Bit, lebih detail kamu bisa baca disini : <a href="http://medanlab.blogspot.co.id/2013/04/41.html">Memilih Sistem Operasi 32-bit atau 64-bit ?</a></p>
                              </div>
                              <a class="btn btn-flat btn-green waves-attach btnNext pull-right">Selanjutnya <span class="icon icon-lg">navigate_next</span></a>
                           </div>
                           <div class="tab-pane fade" id="tab2">
                              <div class="form-group">
                                 <label style="font-size: 20px; margin:30px;" for="select111" class="col-md-12 control-label text-center "> <span class="judul-sesi">Pilih Tema</span> </label>
                                 <div class="col-md-12 text-center" style="padding-bottom: 30px;border-bottom: 2px solid rgb(215, 215, 215);">

                                    <select name="theme" class="form-control image-picker show-html">
                                      <option data-img-src="{{URL::asset('images/theme-tea/blue-bird.png')}}" value="Bluebird">  Bluebird</option>
                                      <option data-img-src="{{URL::asset('images/theme-tea/flat-red-pro.png')}}" value="Ambiance-Blackout-Flat-Red-Pro"> Ambiance-Blackout-Flat-Red-Pro </option>
                                      <option data-img-src="{{URL::asset('images/theme-tea/grey-bird.png')}}" value="Greybird">  Greybird</option>
                                      <option data-img-src="{{URL::asset('images/theme-tea/numix.png')}}" value="Numix">  Numix  </option>
                                      <option data-img-src="{{URL::asset('images/theme-tea/orion.png')}}" value="Orion">  Orion  </option>
                                    </select>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <label style="font-size: 20px; margin:30px;" for="select111" class="col-md-12 control-label text-center"><span class="judul-sesi">Pilih Icon</span></label>
                                 <div class="col-md-12 text-center" style="padding-bottom: 30px;border-bottom: 2px solid rgb(215, 215, 215);">
                                    <select name="icon" class="form-control  image-picker show-html">
                                      <option data-img-src="{{URL::asset('images/icon-tea/icon-gnome.png')}}" value="gnome">  gnome  </option>
                                      <option data-img-src="{{URL::asset('images/icon-tea/elementary-darker.png')}}" value="elementary-xfce-darker">  elementary-xfce-darker  </option>
                                      <option data-img-src="{{URL::asset('images/icon-tea/humanity.png')}}" value="Humanity">  Humanity  </option>
                                      <option data-img-src="{{URL::asset('images/icon-tea/high-contrast.png')}}" value="HighContrast">  high-contrast  </option>
                                       <option data-img-src="{{URL::asset('images/icon-tea/yang.png')}}" value="yang">  yangop2  </option>
                                    </select>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <label style="font-size: 20px; margin:30px;" for="select111" class="col-md-12 control-label text-center"><span class="judul-sesi">Pilih Walpaper</span></label>
                                   <div class="col-md-12 text-center" style="padding-bottom: 30px;border-bottom: 2px solid rgb(215, 215, 215);">
                                    <select name="wallpaper" class="form-control image-picker show-html">
                                       <option data-img-src="{{URL::asset('images/wallpaper/tea1.png')}}" value="/usr/share/xfce4/tea1.png"> Tea1    </option>
                                       <option data-img-src="{{URL::asset('images/wallpaper/xubuntu-quantal.png')}}" value="/usr/share/xfce4/xubuntu-quantal.png">xubuntu-quantal  </option>

                                       <option data-img-src="{{URL::asset('images/wallpaper/solitude.png')}}" value="/usr/share/xfce4/solitude.jpg">  solitude  </option>
                                       <option data-img-src="{{URL::asset('images/wallpaper/xubuntu-raring.png')}}" value="/usr/share/xfce4/xubuntu-raring.png">xubuntu-raring  </option>

                                       <option data-img-src="{{URL::asset('images/wallpaper/justrocks.png')}}" value="/usr/share/xfce4/justrocks.jpg">  justrocks  </option>
                                       <option data-img-src="{{URL::asset('images/wallpaper/traslasierra.png')}}" value="/usr/share/xfce4/traslasierra.jpg">  traslasierra  </option>
                                       <option data-img-src="{{URL::asset('images/wallpaper/xubuntu-trusty.png')}}" value="/usr/share/xfce4/xubuntu-trusty.png">  Dua  </option>
                                       <option data-img-src="{{URL::asset('images/wallpaper/xubuntu-saucy.png')}}" value="/usr/share/xfce4/xubuntu-saucy.png"> xubuntu-saucy  </option>
                                    </select>
                                    <div class="row text-center">
                                      <br/>
                                      gak ada yang kamu sukai ?
                                      <br/>
                                      <a id="doc_snackbar_toggle_1" class="btn btn-brand" style="margin:30px;"> Unggah Wallpaper mu sendiri </a>

                                    </div>
                                 </div>
                              </div>
                              <a class="btn btn-flat waves-attach btnPrevious pull-left"><span class="icon icon-lg">keyboard_arrow_left</span> Sebelumnya</a>
                              <a class="btn btn-flat btn-green waves-attach btnNext pull-right">Selanjutnya <span class="icon icon-lg">keyboard_arrow_right</span></a>
                           </div>
                           <div class="tab-pane fade" id="tab3">
                              <div class="tile-wrap" id="aplikasi">
                                 <div class="tile">
                                    <div class="tile-inner">
                                       Pilih Aplikasi yang kamu butuhkan.
                                    </div>
                                 </div>
                                 <div  class="tile tile-collapse">
                                    <div  id="mainOffice" data-parent="#aplikasi" data-target="#office" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">work</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Office</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="office">
                                       <div class="tile-sub">
                                          <div class="form-group">
                                             <div class="col-md-12 text-center">
                                                <select  multiple="multiple" name="list_aplikasi_office[]" class="form-control image-picker show-labels">
                                                   <option data-img-src="{{URL::asset('images/logos/wps.png')}}" value="">  wps  </option>
                                                   <option data-img-src="{{URL::asset('images/logos/libreoffice.png')}}" value="libreoffice">  libreoffice  </option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                             <a id="office" class="officeBtn btn btn-flat waves-attach" data-toggle="tile" href="#office"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div  class="tile tile-collapse">
                                    <div id="mainMusic" data-parent="#aplikasi" data-target="#music" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">music_note</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Musik</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="music">
                                       <div class="tile-sub">
                                          <div class="form-group">
                                             <div class="col-md-12 text-center">
                                                <select  multiple="multiple" name="list_aplikasi_music[]" class="form-control image-picker show-html">
                                                   <option data-img-src="{{URL::asset('images/logos/audacious.png')}}" value="audacious">  audacious  </option>
                                                   <option data-img-src="{{URL::asset('images/logos/rhythmbox.png')}}" value="" disabled="">  rhythmbox  </option>
                                                   <option data-img-src="{{URL::asset('images/logos/audacity.png')}}" value="" disabled="">  audacity  </option>
                                                   <option data-img-src="{{URL::asset('images/logos/lmms.png')}}" value="" disabled="">  lmms  </option>

                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="music" class="btnMusic btn btn-flat waves-attach" data-toggle="tile" href="#music"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainVideo" data-parent="#aplikasi" data-target="#video" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">ondemand_video</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Video</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="video">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_video[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/vlc.png')}}" value="vlc">  vlc  </option>
                                                  <option data-img-src="{{URL::asset('images/logos/ardour.png')}}" value="">  ardour  </option>
                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="video" class="btnVideo btn btn-flat waves-attach" data-toggle="tile" href="#video"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainInternet" data-parent="#aplikasi" data-target="#internet" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">language</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Internet</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="internet">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_internet[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/firefox.png')}}" value="firefox" >  Firefox  </option>
                                                  <option data-img-src="{{URL::asset('images/logos/chromium.png')}}" value="" >  Chromium  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="internet" class="btnInternet btn btn-flat waves-attach" data-toggle="tile" href="#internet"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainChat" data-parent="#aplikasi" data-target="#chat" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">chat</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Chat</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="chat">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_chat[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/telegram.png')}}" value="" >  Telegram  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="chat" class="btnChat btn btn-flat waves-attach" data-toggle="tile" href="#chat"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainGraphics" data-parent="#aplikasi" data-target="#graphics" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">create</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Graphics</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="graphics">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_graphics[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/inkscape.png')}}" value="inkscape" >  inkscape  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/gimp.png')}}" value="" disabled="">  gimp  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/blender.png')}}" value="" disabled >  blender  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="graphics" class="btnGraphics btn btn-flat waves-attach" data-toggle="tile" href="#graphics"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainReading" data-parent="#aplikasi" data-target="#reading" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">chrome_reader_mode</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Reading</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="reading">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_reading[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/pocket.png')}}" value="" >  pocket  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="reading" class="btnReading btn btn-flat waves-attach" data-toggle="tile" href="#reading"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainGame" data-parent="#aplikasi" data-target="#game" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">videogame_asset</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Game</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="game">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_game[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/fretsonfire.png')}}" value="" >  fretsonfire  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="game" class="btnGame btn btn-flat waves-attach" data-toggle="tile" href="#game"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainDevelopment" data-parent="#aplikasi" data-target="#development" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">code</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Development</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="development">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_development[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/sublime.png')}}" value="" disabled="">  sublime  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/atom.png')}}" value="" disabled="">  atom  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/codeblock.png')}}" value="codeblocks" >  codeblock  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/mysql.png')}}" value="" disabled >  mysql  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/phpmyadmin.png')}}" value="" disabled="">  phpmyadmin  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="development" class="btnDevelopment btn btn-flat waves-attach" data-toggle="tile" href="#development"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainSystem" data-parent="#aplikasi" data-target="#system" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">build</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">System</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="system">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_system[]" class="form-control image-picker show-html">
                                                  <option data-img-src="{{URL::asset('images/theme/dua.png')}}" value="" disabled="">  Satu  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="system" class="btnSystem btn btn-flat waves-attach" data-toggle="tile" href="#system"><span class="icon">keyboard_arrow_down</span>&nbsp;Lanjut</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tile tile-collapse">
                                    <div id="mainOther" data-parent="#aplikasi" data-target="#other" data-toggle="tile">
                                       <div class="tile-side pull-left">
                                          <div class="avatar avatar-sm ">
                                             <span class="icon">devices_other</span>
                                          </div>
                                       </div>
                                       <div class="tile-inner">
                                          <div class="text-overflow">Other</div>
                                       </div>
                                    </div>
                                    <div class="tile-active-show collapse" id="other">
                                       <div class="tile-sub">
                                         <div class="form-group">
                                            <div class="col-md-12 text-center">
                                               <select  multiple="multiple" name="list_aplikasi_other[]" class="form-control image-picker show-html">
                                                 <option data-img-src="{{URL::asset('images/logos/virtualbox.png')}}" value="" disabled="">  virtualbox  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/unetbootin.png')}}" value="" disabled="">  unetbootin  </option>
                                                 <option data-img-src="{{URL::asset('images/logos/guake.png')}}" value="" disabled="">  guake  </option>

                                               </select>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="tile-footer text-center">
                                          <div class="tile-footer-btn text-center">
                                            <a id="other" class="btnOther btn btn-flat waves-attach" data-toggle="tile" href="#other"><span class="icon">keyboard_arrow_down</span>&nbsp;Selesai</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <a class="btn btn-flat waves-attach btnPrevious"><span class="icon icon-lg">keyboard_arrow_left</span>Sebelumnya</a>
                              <div class="text-center">
                                 <input type="submit" name='publish' class="btn btn-brand waves-button buildBtn" value = "Build"/>
                                 <input type="submit" name='save' class="btn btn-flat saveBtn" value = "Simpan dulu" />
                              </div>
            </form>
            </div>
            </div>
            </div>

         </section>
         </div>
         </div>
      </div>
   </div>
</div>

@if(Session::has('first_time'))
    <div aria-hidden="true" class="modal fade" id="first-time" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-heading">
                    <a class="modal-close" data-dismiss="modal">×</a>
                    <h2 class="modal-title">Selamat datang di TeaLinux Studio</h2>
                </div>
                <div class="modal-inner">
                    <p>Ayo mulai racik OS-mu!</p>
                </div>
                <div class="modal-footer">
                    <p class="text-right"><button class="btn btn-flat btn-brand waves-attach waves-button" data-dismiss="modal" type="button">Mulai</button></p>
                </div>
            </div>
        </div>
    </div>
@endif



@endsection

@section('add-script-at-footer')

  {!! Html::script('js/image-picker/image-picker.js') !!}
  <!-- <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script> -->
  <script type="text/javascript">
  $( document ).ready(function() {
      $("#mainOffice").trigger("click");
      $("#first-time").modal('show');
      $("#doc_snackbar_toggle_1").on("click",function(){
        $("body").snackbar({content:"Fitur ini dalam masa pengembangan [ :"})});
      $(":disabled").on("click",function(){$("body").snackbar({content:"Aplikasi belum dapat di tambahkan, kami sedang berkerja untuk ini (:"})});

  });
  $("select.image-picker").imagepicker({
  hide_select:  false,
    selected: function(option){
        var values = this.val();
        alert(values);
    }
});
  // add class "in" when next button clicked : sorry still manually : we can improve this one later :D
  $('.officeBtn').click(function(){

      $("#mainMusic").trigger("click");
      $("#mainOffice").trigger("click");
  });
  $('.btnMusic').click(function(){

      $("#mainVideo").trigger("click");
      $("#mainMusic").trigger("click");
  });
  $('.btnVideo').click(function(){

      $("#mainInternet").trigger("click");
      $("#mainVideo").trigger("click");
  });
  $('.btnInternet').click(function(){

      $("#mainChat").trigger("click");
      $("#mainInternet").trigger("click");
  });
  $('.btnChat').click(function(){

      $("#mainGraphics").trigger("click");
      $("#mainChat").trigger("click");
  });
  $('.btnGraphics').click(function(){

      $("#mainReading").trigger("click");
      $("#mainGraphics").trigger("click");
  });
  $('.btnReading').click(function(){

      $("#mainGame").trigger("click");
      $("#mainReading").trigger("click");
  });
  $('.btnGame').click(function(){

      $("#mainDevelopment").trigger("click");
      $("#mainGame").trigger("click");
  });
  $('.btnDevelopment').click(function(){

      $("#mainSystem").trigger("click");
      $("#mainDevelopment").trigger("click");
  });
  $('.btnSystem').click(function(){

      $("#mainOther").trigger("click");
      $("#mainSystem").trigger("click");
  });



  $('.btnNext').click(function(){
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });
  </script>

@endsection
