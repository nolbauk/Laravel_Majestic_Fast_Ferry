@extends('layout.app')
@extends('layout.sidebar')

@section('content')
    <h1>Welcome to the unknown</h1>
    <div class="widget">
        <h3>Total Data Tujuan</h3>
        <h2 style="text-align: center">{{ $data_tujuan }}</h2>
        <a href="{{ route('admin') }}" style="text-align: center"></a>
    </div>
@endsection
