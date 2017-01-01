<!DOCTYPE html>

<html>
<head>
  <title>Doscom - Dinus Open Source Community</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  {!! Html::style('css/material/css/bootstrap-material-design.css') !!}
  {!! Html::style('css/material/css/ripples.min.css') !!}
  {!! Html::style('css/material/css/snackbar.min.css') !!}


  <!-- Dropdown.js -->
  <link href="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- Page style
  <link href="index.css" rel="stylesheet">

  -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<body>

<!--

Test case

-->
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar menu -->
    <div class="col-md-2">
      Sidebar
    </div>
    
    <div class="col-md-10">
      Content
    </div>
  </div>
</div>

<!-- Buat focus ke field pertama di setiap ada form yang di load -->
<script>
    $(document).ready(function () {
        $("form:not(.navbar-form) :input:visible:enabled:first").focus();
    });
</script>
<script>
  $.material.init();
</script>

<!-- Sliders -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

</body>
</html>
