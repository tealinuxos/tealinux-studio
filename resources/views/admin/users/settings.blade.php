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
    .btn-brand{
      margin-right: 10px;
    }
  </style>


@endsection

@section('title')
  Edit  User
@endsection

@section('content')


  <sec class="container">
    <sec class="row">
      <sec class="col-lg-6 col-lg-offset-3 col-md-7 col-md-offset-2">
        <section class="content-inner margin-top-no">
          <form method="post" action='{{ url("/update/user/settings") }}'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id" value="{{ $user->id }}{{ old('user_id') }}">
            <input type="hidden" name="deskripsi" value="OS ini aku rancang buat kamu, iya kamu..">
            <div class="card">
              <div class="card-main">
                <div class="card-inner">
                  <div class="form-group form-group-label">
                    <label class="floating-label" for="...">Nama</label>
                    <input required="required" placeholder="Nama" type="text" name = "name" class="form-control" value="@if(!old('name')){{$user->name}}@endif{{ old('user') }}" class="form-control"/>
                  </div>
                </div>
                <div class="card-inner">
                  <div class="form-group form-group-label">
                    <label class="floating-label" for="...">Email</label>
                    <input required="required" placeholder="Email" type="email" name = "email" class="form-control" value="@if(!old('email')){{$user->email}}@endif{{ old('user') }}" class="form-control"/>
                  </div>
                </div>
                <div class="card-inner">
                  <div class="form-group form-group-label">
                    <label class="floating-label" for="...">Change password</label>
                    <input placeholder="Password Baru" type="password" name = "password" class="form-control" value=""/>
                  </div>
                </div>
                <div class="text-center">
                <input type="submit" name='publish' class="btn btn-brand waves-button "  value = "Perbaharui"/>
                <a href="{{ url('/user/delete/'.$user->id) }}" class="btn  btn-flat">Hapus</a>
                  </div>
                <br>
                <br>
              </div>
              </div>


</form>
@endsection
