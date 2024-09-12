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
    <div class="card-header">Service</div>
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Service Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="{{isset($titleSlider->title)?$titleSlider->title:old('title')}}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <textarea class="form-control" id="subtitle" name="subtitle" rows="3"
            >{{isset($titleSlider->subtitle)?$titleSlider->subtitle:old('description')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Service Image</label>
            @if(isset($titleSlider->image))
                <br>
                <img src="{{asset('storage').'/'.$titleSlider->image}}" width="200">
            @endif
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{route('admin')}}" class="btn btn-primary">Back</a>

    </div>
</div>
