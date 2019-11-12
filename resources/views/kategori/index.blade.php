@extends('base')
@section('kategori','active')
@section('konten')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Kategori</a>
  </li>
  <li class="breadcrumb-item active">Data</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header text-right">
    <a href="{{route('kategori.create')}}" class="btn btn-primary pull-right">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="1">ID</th>
            <th>Nama Kategori</th>
            <th width="1">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($kategori as $data)
          <tr>
            <td>{{$data->id_kategori}}</td>
            <td>{{$data->nama}}</td>
            <td>
              <div class="btn-group">
                <a href="{{route('kategori.edit',$data->id_kategori)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ route('kategori.destroy', $data->id_kategori)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection