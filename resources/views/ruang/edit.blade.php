@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-black" href="/ruang">Ruang</a></li>
        <li class="breadcrumb-item text-sm text-black active" aria-current="page"><a href="" style="color: black;">Edit Ruang</a></li>
      </ol>
      <h6 class="font-weight-bolder text-black mb-0">Edit Ruang</h6>
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
              <h5 class="card-title">Edit Data Ruang</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($ruangs as $d)
                    <form action="/ruang/updateruang" method="post">
                        @csrf
                        <input type="hidden" name="id_ruang" value="{{ $d->id_ruang }}">

                            <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                                <label for="nama_ruang" class="form-label">Nama Ruang</label>
                                <input type="text" class="form-control" name="nama_ruang" value="{{ $d->nama_ruang }}">
                            </div>

                            <div class="mb-3">
                                <label for="kode_ruang" class="form-label">Kode Ruang</label>
                                <input type="text" class="form-control" name="kode_ruang" value="{{ $d->kode_ruang }}">
                            </div>

                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{ $d->keterangan }}">
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