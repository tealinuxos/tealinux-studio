@extends('app-dashboard')

@section('add-script-at-header')

<style media="screen">
/* pagination */
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 2px;
}

.pagination > li {
  display: inline;
}

.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #7e7e7e;
  background-color: #e2e2e2;
  border: 1px solid #ffffff;
  margin-left: -1px;
}

.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}

.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #333333;
  background-color: #d7d7d7;
  border-color: #ffffff;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #ffffff;
  background-color: #2ecc71;
  border-color: #ffffff;
  cursor: default;
}

.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #e2e2e2;
  border-color: #ffffff;
  cursor: not-allowed;
}/* end */
.edit-disable:hover{
    cursor: pointer;
}
</style>
@endsection


@section('title')
Lihat semua task
@endsection
@section('content')

<div class="container">
    <div class="row">
		<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0">
			<section class="content-inner margin-top-no">
                <div class="card">
					<div class="card-main">
						<div class="card-inner">
                              <a href="{{ url('/task/new') }}" class="btn btn-info"><span class="icon icon-lg">add</span> Buat OS baru</a>
                        </div>
                    </div>
                </div>

				<div class="card">
					<div class="card-main">
						<div class="card-inner margin-bottom-no">
							<div class="card-table">
								<div class="table-responsive">
									<table class="table">
										<thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($tasks as $task)
                                          <tr>

                                            <td>{{$task->id}}</td>
                                            <td>{{$task->nama_os}}</td>
                                            <td>{{$task->deskripsi}}</td>
                                            <td>
                                            @if ($task->status == 1)
                                            Sudah Jadi! <a href="{{ url('/download/'.$task->nama_file_iso ) }}">Unduh</a>
                                            @else
                                            Belum Jadi.
                                            @endif

                                            </td>
                                            <td>{{$task->created_at}}</td>
                                            <td> <a><span class="icon icon-2x edit-disable">edit</span></a><a href="{{ url('/task/delete/'.$task->id) }}"><span style="color:red;"  class="icon icon-2x">delete</span>  </td>
                                          </tr>
                                          @endforeach

												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card-action text-center">
									{!! $tasks->render() !!}

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
@endsection
@section('add-script-at-footer')

    <script type="text/javascript">
        $( document ).ready(function() {
            $(".edit-disable").on("click",function(){
                $("body").snackbar({content:"Fitur edit task masih dalam masa pengembangan [ :"});
            });

            // pesan
            @if(Session::has('message'))
                $("body").snackbar({content:"{!! session('message') !!}"});
            @endif
        });
    </script>
@endsection