@extends('Layouttemp.template')

@section('page-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Barang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/barang">Data Barang</a></li>
                    <li class="breadcrumb-item"><a>Tambah Barang</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- Main content -->
<section class="container-fluid">
    <!-- Form Element sizes -->
    <div class="card card-blue">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Barang</h3>
        </div>
        <div class="card-body">
            <form method="post" action="/barang" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{old('nama')}}" placeholder="Masukan nama tanaman">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" id="jenis" name="jenis"">
                        @foreach ($types as $item)
                        <option value="{{$item->id}}">{{$item->jenis}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <select class="form-control" id="unit" name="unit">
                        @foreach ($units as $item)
                        <option value="{{$item->id}}">{{$item->unit}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control  @error('harga') is-invalid @enderror" id="harga"
                        name="harga" value="{{old('harga')}}" placeholder="Rp.0">
                    @error('harga')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control  @error('stok') is-invalid @enderror" id="stok" name="stok"
                        value="{{old('stok')}}" placeholder="0">
                    @error('stok')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="photo1">Gambar 1</label><br>
                            <img id="photo1" src="{{asset('img/brand.png')}}" alt="add your image 1" style="width: 100px;">
                            <input type="file" accept="image/*" class="form-control-file pt-2 @error('photo1') is-invalid @enderror"
                                id="photo1" name="photo1" onchange="readURL(this, id)">
                            @error('photo1')<div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="photo2">Gambar 2</label><br>
                            <img id="photo2" src="{{asset('img/brand.png')}}" alt="add your image 2" style="width: 100px;">
                            <input type="file" accept="image/*" class="form-control-file pt-2 @error('photo2') is-invalid @enderror"
                                id="photo2" name="photo2" onchange="readURL(this, id)">
                            @error('photo2')<div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="2"
                        placeholder="Masukan beberapa keterangan singkat">{{old('keterangan')}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
