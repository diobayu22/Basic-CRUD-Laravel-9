{{-- @extends('layouts.app') --}}
@extends('layouts.header')

@section('content')
    <div class="container">



        @if (session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{ session('sukses') }}
                data berhasil diinput
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <h1> Data siswa</h1>

                <form action="/siswa/{{ $siswa->id }}/edit" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="form-group">

                        <input type="text" name="nama_depan" value="{{ $siswa->nama_depan }}" class="form-control"
                            id="email" placeholder="nama depan">
                    </div>

                    <div class="form-group">

                        <input type="text" name="nama_belakang" value="{{ $siswa->nama_belakang }}" class="form-control"
                            id="email" placeholder="nama belakang">
                    </div>

                    <div class="form-group">
                        <select name="jenis_kelamin" class="form-control" id="email">

                            <option>Pilih Jenis Kelamin</option>
                            <option value="L" @if ($siswa->jenis_kelamin == 'laki-laki') selected @endif>laki-laki</option>
                            <option value="P" @if ($siswa->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <input type="agama" name="agama" value="{{ $siswa->agama }}" class="form-control" id="email"
                            placeholder="agama">
                    </div>

                    <div class="form-group">

                        <input type="alamat" name="alamat" value="{{ $siswa->alamat }}" class="form-control"
                            id="email" placeholder="alamat">
                    </div>

                    <div class="form-group">

                        <input type="file" name="gambar" value="{{ $siswa->gambar }}" class="form-control"
                            id="email" placeholder="gambar">
                    </div>
                    <button type="submit" class="btn btn-default">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
