@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('contact.update',1)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @if(count($errors)>0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Errors!</strong>
                    @foreach($errors->all() as $error)
                        <br>- {{ $error }}
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="span" class="form-label">Span</label>
                                <input type="text" class="form-control" id="span" name="span"
                                       value="{{isset($contact->span) ? $contact->span : old('span')}}">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="{{isset($contact->title) ? $contact->title : old('title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          rows="2">{{isset($contact->description) ? $contact->description : old('description')}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       value="{{isset($contact->address) ? $contact->address : old('address')}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       value="{{isset($contact->phone) ? $contact->phone : old('phone')}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{isset($contact->email) ? $contact->email : old('email')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="{{route('admin')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
