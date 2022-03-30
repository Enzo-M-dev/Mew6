@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @php echo 'Hello !'; @endphp

  <p>Data from filter : {{ $message }}</p>
  <p>Data from FrontPage Controller : {{ $hello_world }}</p>
  <p>Data from App Controller : {{App::getHeaderLogo()}}</p>

@endsection
