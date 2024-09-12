@extends('layouts.app')


@section('content')
    @include('titleSlider.index')
    <br>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex"><h1 class="card-title">Home Section</h1>
            </div>
            <a href="{{ route('homeSection.edit',$homeSection->id) }}" class="btn btn-warning">Edit</a>

        </div>
        <div class="class-body">
            <section class="gap no-top about-style-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-data-left">
                                <figure>

                                    <img src="{{asset('storage').'/'.$homeSection->image1}}" width="300px"
                                         height="400px">
                                </figure>
                                <figure class="about-image">
                                    <img src="{{asset('storage').'/'.$homeSection->image2}}" width="300px"
                                         height="400px">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6">
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
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="card-title">Projects Completed</h1>
            <a href="{{ route('homeImage.create') }}" class="btn btn-success">Create</a>

        </div>
        <div class="class-body">
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $image->image) }}" class="card-img-top img-fluid"
                                 alt="Image" style="max-height: 200px; object-fit: cover;">
                            <div class="card-body d-flex justify-content-between">
                                <a href="{{route('homeImage.edit',$image->id)}}" class="btn btn-warning">Edit</a>
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


    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="card-title">Projects Completed</h1>
            <a href="{{ route('homeDetails.edit',$homeDetails->id) }}" class="btn btn-success">Edit</a>
        </div>
        <div class="class-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="space">
                        <div class="heading-style-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="data">
                                            <h2>{{$homeDetails->title}}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="data">
                                            <h4>Url Video:</h4>
                                            <p>{{$homeDetails->videoUrl}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span class="num">01.</span> {{$homeDetails->subtitle1}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description1}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <span class="num">02.</span> {{$homeDetails->subtitle2}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description2}}</p></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        <span class="num">03.</span> {{$homeDetails->subtitle3}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description3}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        <span class="num">04.</span> {{$homeDetails->subtitle4}}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description4}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video">
                        <img src="{{ asset('storage/' . $homeDetails->image) }}" class="" height="350">
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
