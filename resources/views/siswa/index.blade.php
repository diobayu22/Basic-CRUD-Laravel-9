{{-- @extends('layouts.app') --}}
@extends('layouts.header')

@section('content')
    <!-- MAIN CONTENT -->
    <div class="container">

        {{-- <div>

            @if (session('sukses'))
                <div class="alert alert-success">
                    {{ session('sukses') }}

                </div>
            @endif
        </div> --}}

        @if (session('sukses'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle"></i> Your settings have been succesfully saved
                {{ session('sukses') }}
            </div>
        @endif


    </div>
    <div class="main-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            @foreach ($siswa as $s)
                                <h3 class="panel-title">{{ $s->nama_depan }}</h3>
                            @endforeach
                        </div>
                        {{-- <button type="button" class="btn btn-primary-sm" data-toggle="modal" data-target="#myModal">
                            Tambah Siswa
                        </button> --}}


                        <div class="panel-body">
                            <div>
                                <h2>Data Siswa</h2>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i
                                        class="fa fa-plus-square"></i> Tambah </button>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama depan</th>
                                    <th>Nama belakang</th>
                                    <th>jenis kelamin</th>
                                    <th>agama</th>
                                    <th>alamat</th>
                                    <th>opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ $no = 1 }}
                                @foreach ($siswa as $s)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><a href="/siswa/{{ $s->id }}/profile"> {{ $s->nama_depan }}</a></td>
                                        <td><a href="/siswa/{{ $s->id }}/profile"> {{ $s->nama_belakang }}</a>
                                        </td>
                                        <td>{{ $s->jenis_kelamin }}</td>
                                        <td>{{ $s->agama }}</td>
                                        <td>{{ $s->alamat }}</td>

                                        <td><a class="btn btn-primary btm-sm"
                                                href="/siswa/{{ $s->id }}/edit">edit</a>
                                            <a class="btn btn-danger btm-sm"
                                                href="/siswa/{{ $s->id }}/delete">hapus</a>
                                        </td>


                                        {{-- btn-sm for little button --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END BASIC TABLE -->
            </div>

            <!-- END CONDENSED TABLE -->
        </div>
    </div>
    </div>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Siswa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/siswa/create" method="post">
                        @csrf

                        <div class="form-group">

                            <input type="text" name="nama_depan" class="form-control" id="email"
                                placeholder="nama depan">
                        </div>

                        <div class="form-group">

                            <input type="text" name="nama_belakang" class="form-control" id="email"
                                placeholder="nama belakang">
                        </div>

                        <div class="form-group">
                            <select name="jenis_kelamin" class="form-control" id="email">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>



                        <div class="form-group">
                            {{-- <select name="agama" class="form-control" id="email">
                                <option value="">pilih agama</option>
                                @foreach ($siswa as $s)
                                    <option value="">{{ $s->agama }}</option>
                                @endforeach
                            </select> --}}
                            <input type="agama" name="agama" class="form-control" id="email" placeholder="agama">
                        </div>

                        <div class="form-group">

                            <input type="alamat" name="alamat" class="form-control" id="email" placeholder="alamat">
                        </div>

                        <div class="form-group">

                            <input type="file" name="gambar" class="form-control" id="email" placeholder="gambar">
                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
@endsection
