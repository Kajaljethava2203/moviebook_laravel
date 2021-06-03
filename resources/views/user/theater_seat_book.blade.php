@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Book Ticket')

@section('main-content')

    <form action="{{route('ticket-save')}}" method="post">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/home" class="btn btn-primary" style="float: right;margin-right: 100px;border-radius: 5px;padding: 12px">Back</a>
                    <h4 class="card-title text-info">Book Ticket</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="text-primary w-25">
                                    Movie
                                </td>
                                <td class="text-primary w-25">
                                    City
                                </td>
                                <td class="text-primary w-25">
                                    theatre
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <select name="movie_id" class="form-control form-control-lg w-100 border-none"
                                            required>

                                        <option value="{{$movie->id}}">{{$movie->title}}</option>

                                    </select>
                                </td>
                                <td class="">
                                    <select name="city_id" class="form-control form-control-lg w-100 border-none"
                                            required>
{{--                                        @foreach($city as $c)--}}
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
{{--                                        @endforeach--}}
                                    </select>
                                </td>
                                <td class="">

                                    <select name="theatre_id" class="form-control form-control-lg w-100 border-none"
                                            required>
{{--                                        @foreach($theatre as $t)--}}
                                        <option value="{{$theatre->id}}">{{$theatre->theatre_name}}</option>
{{--                                        @endforeach--}}
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="background-color: lightseagreen">
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            @foreach($seat as $seats)
                                <div class="d-inline-block" style="height: 40px; width: 130px;">
                                    <input type="checkbox" style="height: 20px;width: 20px;" id="{{$seats->id}}" name="seat_id[]" value="{{$seats->id}}"
                                           @foreach(\App\Models\SeatReserved::select('seat_id')->get() as $rs)
                                           @if(isset($rs) && $rs->seat_id == $seats->id) disabled @endif
                                        @endforeach
                                    >
                                </div>
                            @endforeach
                            <br><input type="submit" name="submit_seats" class="btn btn-success" value="Book">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
