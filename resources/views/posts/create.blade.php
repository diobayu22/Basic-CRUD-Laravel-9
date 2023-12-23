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
                <h1>post</h1>

                <form action="/posts/store" method="post">

                    @csrf

                    <div class="form-group">

                        <input type="text" name="user_id" class="form-control" id="email" placeholder="nama penulis">
                    </div>

                    <div class="form-group">

                        <input type="slug" name="slug" class="form-control" id="email" placeholder="slug">
                    </div>

                    <div class="form-group">

                        <input type="text" name="title" class="form-control" id="email" placeholder="title">
                    </div>

                    <div class="form-group">
                        {{-- <label for="body">body</label>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor> --}}
                        <textarea class="form-control" name="content" class="form-control" id="email" placeholder="content" rows="10"></textarea>
                    </div>
                    {{-- <div class="form-group">

                        <input type="text" name="content" class="form-control" id="email" placeholder="content">
                    </div> --}}




                    <button type="submit" class="btn btn-default">insert</button>
                </form>
            </div>
        </div>
    </div>
@endsection
