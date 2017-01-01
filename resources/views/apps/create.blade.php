@extends('app-dashboard')

@section('add-script-at-header')




@endsection

@section('title')
Masukan Aplikasi Baru
@endsection

@section('content')



<div class="container">
   <div class="row">
      <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
         <section class="content-inner margin-top-no">
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


         </section>
         </div>
         </div>
      </div>
   </div>
</div>




@endsection

@section('add-script-at-footer')


@endsection
