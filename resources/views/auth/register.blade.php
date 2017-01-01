@extends('app-homepage')

@section('onpage-css')
<style type="text/css">


    .checkbox-group {
position:relative
    }

    /* Hide Checkbox Input */
    .checkbox-group input[type=checkbox] {
        display:none
    }

    /* Style Label */
    .checkbox-group label {
        padding-left:30px;
        cursor:pointer;
        float: left;
        color: #fff;
        margin-bottom: 40px;
    }

    /* Style span tag */
    .checkbox-group label span {
        display:block;
        position:absolute;
        left:0;
        -webkit-transition-duration:.3s;
        -moz-transition-duration:.3s;
        transition-duration:.3s
    }
    /* Style box */
    .checkbox-group label .box {
        background:#d9e1e7;
        height:20px;
        width:20px;
        z-index:9;
        -webkit-transition-delay:.2s;
        -moz-transition-delay:.2s;
        transition-delay:.2s
    }

    /* Style check icon. give it a border on the bottom and right only and then rotate */
    .checkbox-group label .check {
        top:0;
        left:7px;
        width:7px;
        height:15px;
        border:2px solid #fff;
        border-top:none;
        border-left:none;
        opacity:0;
        z-index:10;
        -webkit-transform:rotate(180deg);
        -moz-transform:rotate(180deg);
        transform:rotate(180deg);
        -webkit-transition-delay:.3s;
        -moz-transition-delay:.3s;
        transition-delay:.3s
    }

    /* Change color of box when checkbox is checked */
    input[type=checkbox]:checked ~ label .box {
        background:#2ecc71
    }

    /* Rotate and show check icon when checkbox is checked */
    input[type=checkbox]:checked ~ label .check {
        opacity:1;
        -webkit-transform:scale(1) rotate(45deg);
        -moz-transform:scale(1) rotate(45deg);
        transform:scale(1) rotate(45deg);
    }
    input[type="text"]:focus {
        display: block;
        margin: 0;
        width: 100%;

        font-size: 14px;
        appearance: bold;
        box-shadow: none;
        border-radius: none;
    }
     </style>

@endsection

@section('content')

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row" style="margin-top:40px;">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Daftar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">


                {!! Form::open(array('url' => '/auth/register')) !!}

                            <div class="form-group">
                                  <input class="form-control" value="{{ old('name') }}" id="inputEmail" placeholder="Nama" type="text" name="name">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="inputEmail" value="{{ old('email') }}" placeholder="Email" type="email" name="email">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input required="required" placeholder="Username" type="text" value="{{ old('username') }}" name = "username" class="form-control" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="inputPassword" placeholder="Kata Sandi" type="password" name="password">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="inputPassword" placeholder="Konfirmasi Kata Sandi" type="password" name="password_confirmation">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="checkiz" required="requested">
                                    <label for="checkiz">
                                        <span class="check"></span>
                                        <span class="box"></span>
                                         Setuju dengan persetujuan | <a style="color:#fff;border-bottom: 2px solid #fff; text-decoration:none;" href="">Persetujuan</a>
                                     </label>
                                </div>
                            </div>




                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Daftar</button>
                            <p style="margin:20px; color:#fff;"><b> Sudah punya akun ?  | <a style="color:#fff;border-bottom: 2px solid #fff; text-decoration:none;" href="{{ url('auth/login') }}">Masuk </a> </b></p>
                            <!-- <button type="submit" class="btn btn-xl">Daftar</button> -->
                        </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection
