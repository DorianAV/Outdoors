<div class="form-group">
    <label for="image">Image</label>
    @if(isset($image->image))
        <br>
        <img src="{{asset('storage').'/'.$image->image}}" width="200">
    @endif
    <input type="file" class="form-control" id="image" name="image">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('admin')}}" class="btn btn-success">Back</a>
</div>
