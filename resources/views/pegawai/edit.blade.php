@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-black" href="/pegawai">Pegawai</a></li>
        <li class="breadcrumb-item text-sm text-black active" aria-current="page"><a href="" style="color: black;">Edit Pegawai</a></li>
      </ol>
      <h6 class="font-weight-bolder text-black mb-0">Edit Pegawai</h6>
    </nav>
  </div>
</nav>
 
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Edit Data pegawai</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($pegawais as $d)
                    <form action="/pegawai/updatepegawai" method="post">
                        @csrf
                        <input type="hidden" name="id_pegawai" value="{{ $d->id_pegawai }}">

                            <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama_pegawai" value="{{ $d->nama_pegawai }}">
                            </div>

                            <div class="mb-3">
                                <label for="no_pegawai" class="form-label">No Pegawai</label>
                                <input type="number" class="form-control" name="no_pegawai" value="{{ $d->no_pegawai }}">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $d->alamat }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection