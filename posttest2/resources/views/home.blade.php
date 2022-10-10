@extends('layouts.global')
@section('title')
Ini Halaman Home
@endsection
@section('content')
<div class="container px-4 py-5">
<h2 class="pb-2 border-bottom"></h2>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Jenis</th>
<th scope="col">Penerbit</th>
</tr>
</thead>
<tbody>
@foreach ($tokobukus as $tokobuku)
<tr>
<th scope="row">{{ $tokobuku->id }}</th>
<td>{{ $tokobuku-> nama }}</td>
<td>{{ $tokobuku-> jenis }}</td>
<td>{{ $tokobuku-> penerbit-> nama }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
