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

                <form action="/posts/{{ $post->id }}/edit" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf



                    <div class="form-group">

                        <input type="text" name="nama_penulis" value="{{ $post->nama_penulis }}" class="form-control"
                            id="email" placeholder="nama penulis">
                    </div>



                    <div class="form-group">

                        <input type="text" name="slug" value="{{ $post->slug }}" class="form-control" id="email"
                            placeholder="slug">
                    </div>

                    <div class="form-group">

                        <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="email"
                            placeholder="title">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="content" value="{{ $post->content }}" class="form-control" id="email"
                            placeholder="content" rows="10"></textarea>
                    </div>


                    <button type="submit" class="btn btn-default">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
