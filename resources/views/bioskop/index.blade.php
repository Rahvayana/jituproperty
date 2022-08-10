@extends('layout')
@section('menu', 'Bioskop')
@section('sub_menu', 'List Bioskop')
@section('btn_add')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('cinema.create') }}" class="btn waves-effect">
        <i class="mdi mdi-plus"></i> Buat Bioskop Baru
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
                                    <th>Kode Bioskop</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cinemas as $cinema)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$cinema->code}}</td>
                                    <td>{{$cinema->name}}</td>
                                    <td>{{$cinema->address}}</td>
                                    <td>{{$cinema->city}}</td>
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