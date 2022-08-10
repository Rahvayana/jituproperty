@extends('layout')
@section('style')
@section('menu', 'Film')
@section('sub_menu', 'Buat Film')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('film.store') }}"method="POST" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label for="simpleinput">Title</label>
                            <input type="text" id="simpleinput" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="simpleinput">Launch Date</label>
                            <input type="date" id="simpleinput" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="simpleinput">Synopsis</label>
                            <textarea  id="simpleinput" name="synopsis" class="form-control" placeholder="Synopsis"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>

                </div>
                <!-- end card-body-->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
@section('script')

@endsection