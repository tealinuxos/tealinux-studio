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
  Tambah User
@endsection

@section('content')
  <sec class="container">
    <sec class="row">
      <sec class="col-lg-6 col-lg-offset-3 col-md-7 col-md-offset-2">
        <section class="content-inner margin-top-no">
          <form action="add-user" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="deskripsi" value="OS ini aku rancang buat kamu, iya kamu..">
            <div class="card">
              <div class="card-main">
                <div class="card-inner">
                  <div class="form-group form-group-label">
                    <label class="floating-label" for="...">Nama</label>
                    <input required="required" value="" placeholder="Nama" type="text" name = "name" class="form-control" />
                  </div>
                </div>

                <div class="card-inner">
                <div class="form-group form-group-label">
                  <label class="floating-label" for="...">Username</label>
                  <input required="required" value="" placeholder="Username" type="text" name = "username" class="form-control" />
                </div>
              </div>

                <div class="card-inner">
                <div class="form-group form-group-label">
                  <label class="floating-label" for="...">Email</label>
                  <input required="required" value="" placeholder="Email" type="email" name = "email" class="form-control" />
                </div>

                <div class="card-inner">
                <div class="form-group form-group-label">
                  <label  class="floating-label" for="...">Role</label>

                  <div class="">
                    <select name="role" class="form-control">
                      <option value="pengguna">Pengguna</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                  </div>
                  </div>

                  <div class="card-inner">
                    <div class="form-group form-group-label">
                      <label class="floating-label" for="...">Password</label>
                      <input required="required" value="" placeholder="Password Baru" type="text" name = "password" class="form-control" />
                    </div>
                  </div>

                  <div class="text-center">
                    <input type="submit" name='save' class="btn btn-brand waves-button " value = "Tambahkan" />
                  </div>

              </div>
              </div>
            </div>
        </section>
        </div>
        </div>
        </div>



        <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
@endsection
