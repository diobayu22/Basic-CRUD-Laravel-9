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


                        <div class="panel-body">
                            <div>
                                <h2>Data Post</h2>
                            </div>
                            <div>
                                <a href="/posts/create"> <button type="button"
                                        class="btn btn-primary btn-sm">Tambah</button></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>title</th>
                                        <th>slug</th>
                                        <th>tanggal</th>
                                        <th>penulis</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{ $no = 1 }}
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->slug }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>{{ $post->user_id }}</td>
                                            {{-- <td>{{ $post->user->name }}</td> --}}

                                            <td> <a target="_blank" class="btn btn-info btm-sm"
                                                    href="/posts/{{ $post->id }}/blog">view</a>
                                                {{-- href="{{ route('site.single.post', $post->slug) }}">view</a> --}}
                                                <a class="btn btn-primary btm-sm"
                                                    href="/posts/{{ $post->id }}/edit">edit</a>
                                                <a class="btn btn-danger btm-sm"
                                                    href="/posts/{{ $post->id }}/delete">hapus</a>

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
@endsection
