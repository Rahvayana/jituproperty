@extends('layout')
@section('menu', 'Jadwal Tayang')
@section('sub_menu', 'List Jadwal Tayang')
@section('btn_add')
<div class="dropdown d-none d-sm-inline-block">
    <a href="{{ route('schedule.create') }}" class="btn waves-effect">
        <i class="mdi mdi-plus"></i> Buat Jadwal Tayang Baru
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
                                    <th>Kode Film</th>
                                    <th>Judul</th>
                                    <th>Tanggal Tayang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{strtoupper($schedule->code).sprintf('%03d', $schedule->id)}}</td>
                                    <td>{{$schedule->film->title}}</td>
                                    <td>{{$schedule->date_time}}</td>
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