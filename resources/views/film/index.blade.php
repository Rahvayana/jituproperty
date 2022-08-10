@extends('layout')
@section('menu', 'Film')
@section('sub_menu', 'List Film')
@section('btn_add')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('film.create') }}" class="btn waves-effect">
        <i class="mdi mdi-plus"></i> Buat Film Baru
    </a>
</div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" style="font-weight: bold">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Film</th>
                                    <th>Judul</th>
                                    <th>Tanggal Tayang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($films as $film)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{strtoupper($film->code).sprintf('%03d', $film->id)}}</td>
                                    <td>{{$film->title}}</td>
                                    <td>{{$film->date}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-rounded waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection