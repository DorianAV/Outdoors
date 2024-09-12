@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('about.update',1)}}" method="POST" enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="{{isset($about->title)?$about->title:old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle1" class="form-label">Subtitle 1</label>
                        <input type="text" class="form-control" id="subtitle1" name="subtitle1"
                               value="{{isset($about->subtitle1)?$about->subtitle1:old('subtitle1')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description1" class="form-label">Description 1</label>
                        <textarea class="form-control" id="description1" name="description1"
                                  rows="1">{{isset($about->description1)?$about->description1:old('description1')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image1" class="form-label">Image 1</label>
                        @if(isset($about->image1))
                            <br>
                            <img src="{{asset('storage').'/'.$about->image1}}" width="200">
                        @endif
                        <input type="file" class="form-control" id="image1" name="image1" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle2" class="form-label">Subtitle 2</label>
                        <input type="text" class="form-control" id="subtitle2" name="subtitle2"
                               value="{{isset($about->subtitle2)?$about->subtitle2:old('subtitle2')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description2" class="form-label">Description 2</label>
                        <textarea class="form-control" id="description2" name="description2"
                                  rows="1">{{isset($about->description2)?$about->description2:old('description2')}}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="image2" class="form-label">Image 2</label>
                        @if(isset($about->image2))
                            <br>
                            <img src="{{asset('storage').'/'.$about->image2}}" width="200">
                        @endif
                        <input type="file" class="form-control" id="image2" name="image2" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{route('admin')}}" class="btn btn-primary">Back</a>
                </div>

            </div>
        </form>
    </div>
@endsection
