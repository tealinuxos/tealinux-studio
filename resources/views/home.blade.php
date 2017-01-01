@extends('app')
@section('title')
{{$title}}
@endsection



@section('content')

@if ( !$tasks->count() )
Belum ada postingan, masuk dan tulis sesuatu!
@else
<div class="">
  @foreach( $tasks as $task )
  <div class="list-group">
    <div class="list-group-item">
      <h3><a href="{{ url('/'.$task->slug) }}">{{ $task->title }}</a>
        @if(!Auth::guest() && ($task->author_id == Auth::user()->id || Auth::user()->is_admin()))
          @if($task->active == '1')
          <a class="btn-raised" href="{{ url('edit/'.$task->slug)}}"><button class="btn" style="float: right">Sunting Post</button></a>
          @else
          <a href="{{ url('edit/'.$task->slug)}}"><button class="btn" style="float: right">Edit Draft</button></a>
          @endif
        @endif
      </h3>
      <p>{{ $task->created_at->format('M d,Y \a\t h:i a') }} oleh <a href="{{ url('/user/'.App\User::find($task->user_id)->username)}}">{{ $task->author->name }}</a></p>
    </div>
    <div class="list-group-item">
      <article>
        {!! str_limit($task->body, $limit = 1500, $end = '....... <a href='.url("/".$task->slug).'>Lanjutin baca
        </a>') !!}
      </article>
    </div>
  </div>
  @endforeach
  <center>  {!! $tasks->render() !!} </center>
</div>
@endif
@endsection
