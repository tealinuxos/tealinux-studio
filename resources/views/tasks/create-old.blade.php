@extends('app')

@section('add-script-at-header')

{!! Html::style('js/image-picker/image-picker.css') !!}
@endsection
@section('title')
Mulai Racik OS-mu
@endsection
@section('content')



<form action="/task/new" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="deskripsi" value="OS ini aku rancang buat kamu, iya kamu..">

  <div class="form-group">
    <input required="required" value="{{ old('nama_os') }}" placeholder="Beri nama OS kamu.." type="text" name = "nama_os" class="form-control" />
  </div>
  <div class="form-group">
      <label class="col-md-2 control-label">Arsitektur</label>

      <div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input name="arsiektur" id="optionsRadios1" value="32" checked="" type="radio">
            32 Bit
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input name="arsiektur" id="optionsRadios2" value="64" type="radio">
            64 Bit
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select111" class="col-md-2 control-label">Tema</label>

      <div class="col-md-10">
        <select name="theme" class="form-control image-picker show-html">
          <option data-img-src="{{URL::asset('images/theme/dua.png')}}" value="normal-theme">  Satu  </option>
          <option data-img-src="{{URL::asset('images/theme/dua.png')}}" value="dark-theme">  Dua  </option>

        </select>

      </div>
    </div>
    <div class="form-group">
      <label for="select111" class="col-md-2 control-label">Walpaper</label>

      <div class="col-md-10">
        <select name="wallpaper" class="form-control image-picker show-html">
          <option data-img-src="{{URL::asset('images/theme/dua.png')}}" value="normal-theme">  Satu  </option>
          <option data-img-src="{{URL::asset('images/theme/dua.png')}}" value="dark-theme">  Dua  </option>

        </select>

      </div>
    </div>
    <div class="form-group">
     <label for="inputFile" class="col-md-2 control-label">Upload wallpaper</label>

     <div class="col-md-10">
       <input readonly="" class="form-control" placeholder="Browse..." type="text">
       <input id="inputFile" multiple="" type="file">
     </div>
   </div>

  <input type="submit" name='publish' class="btn btn-success" value = "Build"/>
  <input type="submit" name='save' class="btn btn-default" value = "Simpan dulu" />
</form>
@endsection

@section('add-script-at-footer')
  {!! Html::script('js/image-picker/image-picker.js') !!}

@endsection

<script type="text/javascript">

</script>
