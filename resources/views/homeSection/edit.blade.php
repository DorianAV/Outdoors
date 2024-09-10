@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('homeSection.update',$homeSection->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="card-header">Home Section</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="span" class="form-label">Span</label>
                        <input type="text" class="form-control" id="span" name="span"
                               value="{{isset($homeSection->span)?$homeSection->span:old('span')}}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <textarea class="form-control" id="title" name="title" rows="3"
                        >{{isset($homeSection->title)?$homeSection->title:old('title')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                        >{{isset($homeSection->description)?$homeSection->description:old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image1" class="form-label">Image 1</label>
                        @if(isset($homeSection->image1))
                            <br>
                            <img src="{{asset('storage').'/'.$homeSection->image1}}" width="200">
                        @endif
                        <input type="file" class="form-control" id="image1" name="image1" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image2" class="form-label">Image 2</label>
                        @if(isset($homeSection->image2))
                            <br>
                            <img src="{{asset('storage').'/'.$homeSection->image2}}" width="200">
                        @endif
                        <input type="file" class="form-control" id="image2" name="image2" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{route('admin')}}" class="btn btn-success">Back</a>

                </div>
            </div>

        </form>
    </div>
@endsection
