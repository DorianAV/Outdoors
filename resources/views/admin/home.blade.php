@extends('layouts.app')


@section('content')
    @include('titleSlider.index')
    <br>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1 class="card-title">Titles</h1>
            <a href="{{ route('homeSection.edit',$homeSection->id) }}" class="btn btn-success">Edit</a>

        </div>
        <div class="class-body">
            <section class="gap no-top about-style-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" >
                            <div class="about-data-left">
                                <figure>

                                    <img src="{{asset('storage').'/'.$homeSection->image1}}" width="300px" height="400px">
                                </figure>
                                <figure class="about-image">
                                    <img src="{{asset('storage').'/'.$homeSection->image2}}"  width="300px" height="400px">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="about-data-right">
                                <span>{{$homeSection->span}}</span>
                                <h2>{{$homeSection->title}}</h2>
                                <div class="about-info">
                                    <p>
                                        {{$homeSection->description}}                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1 class="card-title">Projects Completed</h1>
            <a href="{{ route('homeImage.create') }}" class="btn btn-success">Create</a>

        </div>
        <div class="class-body">
            <div class="row">
                @foreach($images as $image)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image->image) }}" class="card-img-top img-fluid" alt="Image" style="max-height: 200px; object-fit: cover;">
                        <div class="card-body d-flex justify-content-between">
                            <a href="{{route('homeImage.edit',$image->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('homeImage.destroy',$image->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
