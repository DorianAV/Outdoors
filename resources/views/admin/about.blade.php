@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1 class="card-title">About</h1>
            <a href="{{ route('about.edit',1) }}" class="btn btn-success">Edit</a>
        </div>
        <div class="class-body">
            <div class="row">

                    <div class="container"> <div class="row">
                            <h2>{{$about->title}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="who-we-are">
                                    <div>
                                        <h3>{{$about->subtitle1}}</h3>
                                        <p>{{$about->description1}}</p>
                                    </div>
                                    <figure>
                                        <img class="w-100" src="{{asset('storage').'/'.$about->image1}}" alt="About Image One">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="who-we-are space">
                                    <div>
                                        <h3>{{$about->subtitle2}}</h3>
                                        <p>{{$about->description2}}</p>
                                    </div>
                                    <figure>
                                        <img class="w-100" src="{{asset('storage').'/'.$about->image2}}" alt="About Image Two ">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>

    </div>
@endsection
