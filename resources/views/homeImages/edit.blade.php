@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('homeImage.update',$image->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('homeImages.form')
        </form>
    </div>
@endsection
