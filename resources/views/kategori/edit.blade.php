@extends('base')
@section('kategori','active')
@section('konten')
<form action="{{route('kategori.update',$kategori->id_kategori)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection