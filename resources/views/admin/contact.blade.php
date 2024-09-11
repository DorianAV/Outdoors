@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1 class="card-title">Contact</h1>
            <a href="{{ route('contact.edit',1) }}" class="btn btn-success">Edit</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="span" class="form-label fs-4 fw-bold">Span:</label>
                        <p class="text-muted fs-5">{{$contact->span}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label fs-4 fw-bold">Title:</label>
                        <p class="text-muted fs-5">{{$contact->title}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fs-4 fw-bold">Description:</label>
                        <p class="text-muted fs-5">{{$contact->description}}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label fs-4 fw-bold">Address:</label>
                        <p class="text-muted fs-5">{{$contact->address}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label fs-4 fw-bold">Phone:</label>
                        <p class="text-muted fs-5">{{$contact->phone}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4 fw-bold">Email:</label>
                        <p class="text-muted fs-5">{{$contact->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
