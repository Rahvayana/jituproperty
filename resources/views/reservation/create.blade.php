@extends('layout')
@section('style')
@section('menu', 'Reservation')
@section('sub_menu', 'Buat Reservation')
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
                    @if (session('error'))
                        <div class="alert alert-danger" style="font-weight: bold">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('resrevation.store') }}"method="POST" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label for="schedule">Select Jadwal</label>
                            <div class="input-group">
                                <select name="schedule" id="schedule" class="form-control">
                                    <option value="">Select Jadwal</option>
                                    @foreach ($schedules as $schedule)
                                    <option value="{{$schedule->id}}">{{$schedule->film->title."-".date('H:i',strtotime($schedule->date_time))."-".$schedule->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Kursi">Kursi</label>
                            <input type="number" id="Kursi" name="chair" class="form-control">
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
<script>
    function get_detail_film(){
        var film_id=$('#film option:selected').val()

        $.ajax({
            type: 'GET', 
            url: '/film/'+film_id,
            success: function (data) {
                console.log(data)
                $('#date').val(data.date);
            },
            error: function() { 
                console.log(data);
            }
        }); 
    }
</script>
@endsection