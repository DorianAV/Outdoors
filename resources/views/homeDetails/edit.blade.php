@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('homeDetails.update',$homeDetails->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="card-header">Home Details</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{isset($homeDetails->title)?$homeDetails->title:old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle1" class="form-label">Subtitle 1</label>
                        <input type="text" class="form-control" id="subtitle1" name="subtitle1" value="{{isset($homeDetails->subtitle1)?$homeDetails->subtitle1:old('subtitle1')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description1" class="form-label">Description 1</label>
                        <textarea class="form-control" id="description1" name="description1" rows="3">{{isset($homeDetails->description1)?$homeDetails->description1:old('description1')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle2" class="form-label">Subtitle 2</label>
                        <input type="text" class="form-control" id="subtitle2" name="subtitle2" value="{{isset($homeDetails->subtitle2)?$homeDetails->subtitle2:old('subtitle2')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description2" class="form-label">Description 2</label>
                        <textarea class="form-control" id="description2" name="description2" rows="3">{{isset($homeDetails->description2)?$homeDetails->description2:old('description2')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle3" class="form-label">Subtitle 3</label>
                        <input type="text" class="form-control" id="subtitle3" name="subtitle3" value="{{isset($homeDetails->subtitle3)?$homeDetails->subtitle3:old('subtitle3')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description3" class="form-label">Description 3</label>
                        <textarea class="form-control" id="description3" name="description3" rows="3">{{isset($homeDetails->description3)?$homeDetails->description3:old('description3')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle4" class="form-label">Subtitle 4</label>
                        <input type="text" class="form-control" id="subtitle4" name="subtitle4" value="{{isset($homeDetails->subtitle4)?$homeDetails->subtitle4:old('subtitle4')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description4" class="form-label">Description 4</label>
                        <textarea class="form-control" id="description4" name="description4" rows="3">{{isset($homeDetails->description4)?$homeDetails->description4:old('description4')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        @if(isset($homeDetails->image))
                            <br>
                            <img src="{{asset('storage').'/'.$homeDetails->image}}" width="200">
                        @endif
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="videoUrl" class="form-label">Video URL</label>
                        <input type="text" class="form-control" id="videoUrl" name="videoUrl" value="{{isset($homeDetails->videoUrl)?$homeDetails->videoUrl:old('videoUrl')}}">
                    </div>

                    <button type="submit" class="btn btn-success">Create</button>
                    <a href="{{route('admin')}}" class="btn btn-primary">Back</a>
                </div>


        </form>
    </div>
@endsection
