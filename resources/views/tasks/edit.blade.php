@extends('app')
@section('title')
Edit Postingan
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    });

</script>
<form method="post" action='{{ url("/task/update") }}'>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="post_id" value="{{ $task->id }}{{ old('post_id') }}">
  <div class="form-group">
    <input required="required" placeholder="Tulis judul" type="text" name = "nama_os" class="form-control" value="@if(!old('nama_os')){{$task->nama_os}}@endif{{ old('nama_os') }}"/>
  </div>
  <div class="form-group">
    <textarea name='body'class="form-control">
      @if(!old('deskripsi'))
      {!! $task->deskripsi !!}
      @endif
      {!! old('deskripsi') !!}
    </textarea>
  </div>
  @if($task->status == '1')
  <input type="submit" name='publish' class="btn btn-success" value = "Perbarui"/>
  @else
  <input type="submit" name='publish' class="btn btn-success" value = "Pulikasikan"/>
  @endif
  <input type="submit" name='save' class="btn btn-default" value = "Simpan sebagai Draft" />
  <a href="{{  url('task/delete/'.$task->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Hapus</a>
</form>
@endsection
