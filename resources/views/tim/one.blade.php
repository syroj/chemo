@extends('template.template')
@section('content_web')
<h1>Halaman tim</h1>
@foreach($tim as $t)
	{{$t->key}} <br>
@endforeach
@endsection