@extends('base')
@section('produk','active')
@section('konten')
<form action="{{route('produk.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection