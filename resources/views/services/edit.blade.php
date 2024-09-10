@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('services.form')
        </form>
    </div>
@endsection