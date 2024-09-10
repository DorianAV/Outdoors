@extends('layouts.app')
@section('content')
    <div class="container">


        <form action="{{url('/service')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('services.form')
        </form>
    </div>

@endsection
