@extends('layout')
@section('menu', 'Reservation')
@section('sub_menu', 'List Reservation')
@section('btn_add')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('resrevation.create') }}" class="btn waves-effect">
        <i class="mdi mdi-plus"></i> Buat Reservation Baru
    </a>
</div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" style="font-weight: bold">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Pemesanan</th>
                                    <th>Judul</th>
                                    <th>Tanggal Tayang</th>
                                    <th>Kursi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{strtoupper($reservation->code).sprintf('%03d', $reservation->id)}}</td>
                                    <td>{{$reservation->schedule->film->title}}</td>
                                    <td>{{$reservation->schedule->date_time}}</td>
                                    <td>{{$reservation->chair}}</td>
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