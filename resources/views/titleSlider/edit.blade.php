@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('titleSlider.update',$titleSlider->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('titleSlider.form')
        </form>
    </div>
@endsection
