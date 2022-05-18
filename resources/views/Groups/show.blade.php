@extends('layout.app')

@section('title', 'Groups')

@section('content')
<h3 class="text-center">Detail Group</h3>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Groups</th>
      <th scope="col">Description</th>
      <th scope="col">Anggota</th>
      <th scope="col">Jumlah Anggota</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $groups['name'] }}</td>
      <td>{{ $groups['description'] }}</td>
      <td>
        @foreach ($groups->friends as $friend)
        <li>{{$friend->nama}}</li>
        @endforeach
      </td>
      <td>{{ $groups -> friends -> count() }}</td>
    </tr>
  </tbody>
</table>
@endsection

