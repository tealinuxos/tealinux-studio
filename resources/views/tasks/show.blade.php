@extends('app')
@section('title')
  @if($task)
    {{ $task->nama_os }}
    @if(!Auth::guest() && ($task->user_id == Auth::user()->id || Auth::user()->is_admin()))
      <a href="{{ url('task/edit/'.$task->slug)}}"><button class="btn" style="float: right">Edit Task</button></a>
    @endif
  @else
    Halaman tidak ditemukan
  @endif
@endsection
@section('title-meta')
<p>{{ $task->created_at->format('M d,Y \a\t h:i a') }} oleh <a href="{{ url('/user/'.App\User::find($task->user_id)->username)}}">Nama Pembuat</a></p>
@endsection
@section('content')
@if($task)
  <div>
    {!! $task->deskripsi !!}
  </div>
  <div>
    <h2>Tinggalkan komentar</h2>
  </div>
  @if(Auth::guest())
    <p>Masuk dulu untuk berkomentar</p>
  @else
    <div class="panel-body">
      <form method="post" action="/comment/add">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="on_post" value="{{ $task->id }}">
        <input type="hidden" name="slug" value="{{ $task->slug }}">
        <div class="form-group">
          <textarea required="required" placeholder="Tulis apapun yg kamu pikirkan" name = "deskripsi" class="form-control"></textarea>
        </div>
        <input type="submit" name='post_comment' class="btn btn-success" value = "Posting"/>
      </form>
    </div>
  @endif


@else
404 error
@endif
@endsection
