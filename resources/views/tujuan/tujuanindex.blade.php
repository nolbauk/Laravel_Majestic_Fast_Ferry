@extends('layout.app')
@extends('layout.sidebar')

@section('content')
<h3>Tujuan</h3><br>
<div style="margin-bottom: 20px">
  <a href="{{ route('tujuancreate') }}" class="btn btn-tambah">Tambah Data</a>
  <a href="{{ route('tujuanreport') }}" class="btn btn-tambah">Cetak Data</a><br>
</div>
<table class='table-data' id="table1">
    <thead>
        <tr>
            <th style="text-align: center; width: 25%">From</th>
            <th style="text-align: center; width: 25%">Destination</th>
            <th style="text-align: center; width: 20%">Price</th>
            <th style="text-align: center; width: 30%">Action</th>
        </tr>
    </thead>
    <tbody>
        @if (count($data) > 0)
        @foreach ($data as $item=>$row)
        <tr>
                <td style="text-align: center;">{{ $row->dari}}</td>
                <td style="text-align: center;">{{ $row->destination}}</td>
                <td style="text-align: center;">{{ $row->price}}</td>
                <td style="text-align: center; padding:20px;">
                    <a href="{{ route('tujuanedit', $row->id) }}" class="btn-edit">Edit</a>
                    <a href="{{ route('tujuandelete', $row->id) }}" class="btn-delete"onclick="return confirm('Apakah anda yakin menghapus data ini?')">Delete</a>
                </td>
        </tr>
        @endforeach
        @else
            <tr>
                <td colspan="4"><p class="text text-center">Data Masih Kosong</p></td>
            </tr>
        @endif
    </tbody>
</table>
@endsection
