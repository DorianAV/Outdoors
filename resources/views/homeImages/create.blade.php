@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('/homeImage')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('homeImages.form')
        </form>
    </div>

@endsection
