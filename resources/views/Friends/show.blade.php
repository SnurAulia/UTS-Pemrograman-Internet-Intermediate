@extends('layout.app')

@section('title', 'Friends')

@section('content')
        <h3 class="text-center">Detail Teman</h3>
        <hr>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">No.Tlp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Groups</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $friends['nama'] }}</td>
      <td>{{ $friends['no_tlp'] }}</td>
      <td>{{ $friends['alamat'] }}</td>
      <td>{{ $friends['groups_id'] }}</td>
    </tr>
  </tbody>
</table>
</div>
@endsection

