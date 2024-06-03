@extends('layout.app')
@extends('layout.sidebar')

@section('content')
	<h3>Input Tujuan</h3>
	<div class="form-login">
		<form class="row g-3" action="{{ route('tujuancreate') }}" method="POST">
				@csrf
			<label for="dari">From</label>
			<input class="input" type="text" name="dari"
					id="dari"/>
			<label for="destination">Destination</label>
			<input class="input" type="text" name="destination"
					id="destination"/>
			<label for="price">Price</label>
			<input class="input" type="number" name="price"
					id="price"/>
			<button type="submit" class="btn btn-simpan">Simpan</button>
		</form>
	</div>
@endsection
