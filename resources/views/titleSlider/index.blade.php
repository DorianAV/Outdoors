<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h1 class="card-title">Titles</h1>

    </div>


    <div class="card-body">
        @if($titleSliders->isEmpty())
            <h3 class="card-title">No Titles to show</h3>
        @endif
        @if($titleSliders->isNotEmpty())
            <div class="table-responsive">
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($titleSliders as $titleSlider)
                        <tr>
                            <td scope="row">{{$titleSlider->id}}</td>
                            <td>{{$titleSlider->title}}</td>
                            <td>{{{$titleSlider->subtitle}}}</td>
                            <td>
                                <img src="{{asset('storage').'/'.$titleSlider->image}}" width="100">
                            </td>
                            <td class="text-nowrap">
                                <a href="{{route('titleSlider.edit',$titleSlider->id)}}"
                                   class="btn btn-warning d-inline-block">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        @endif
    </div>

</div>
