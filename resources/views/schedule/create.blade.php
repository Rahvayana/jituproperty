@extends('layout')
@section('style')
@section('menu', 'Jadwal')
@section('sub_menu', 'Buat Jadwal')
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
                    <form action="{{ route('schedule.store') }}"method="POST" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label>Select Film</label>
                            <div class="input-group">
                                <select name="film" id="film" class="form-control">
                                    <option value="">Select Film</option>
                                    @foreach ($films as $film)
                                    <option value="{{$film->id}}">{{$film->title}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <button o class="btn btn-primary waves-effect waves-light" onclick="get_detail_film()" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Select Bioskop</label>
                            <select name="cinema" id="cinema" class="form-control">
                                <option value="">Select Bioskop</option>
                                @foreach ($cinemas as $cinema)
                                <option value="{{$cinema->id}}">{{$cinema->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="text" id="date" name="date" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Time">Date Time</label>
                            <input type="datetime-local" id="Time" name="datetime" class="form-control">
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