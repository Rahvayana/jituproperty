@extends('layout')
@section('style')
@section('menu', 'Bioskop')
@section('sub_menu', 'Buat Bioskop')
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
                    <form action="{{ route('cinema.store') }}"method="POST" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label for="simpleinput">Name</label>
                            <input type="text" id="simpleinput" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="simpleinput1">Address</label>
                            <input type="text" id="simpleinput1" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="simpleinput1">City</label>
                            <input type="text" id="simpleinput1" name="city" class="form-control" placeholder="City">
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