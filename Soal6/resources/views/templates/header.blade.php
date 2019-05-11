<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('jqueryui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('jqueryui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <title>Soal 6</title>  
</head>
<style>
    .font-mine{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

</style>
<body class="font-mine">
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Soal no 6</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="page-header">

</div>
    @yield('content')
    @include('templates/footer')