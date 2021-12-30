@extends('layouts.app')

@section('content')
<head>
    <title> BPM </title>
</head>
<body class="hold-transition sidebar-mini">
<nav class="main-header navbar navbar-expand navbar-white navbar-light"">
  @include('layouts.header')
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div>
    @include('layouts.sidebar')
  </div>
  </aside>
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="laporan1"> Laporan </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
