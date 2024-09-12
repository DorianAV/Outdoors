
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <form action="" method="get" class="d-flex align-items-center">
                        <input type="text" class="form-control me-2" placeholder="Find Services" style="max-width: 200px; max-height: 40px;" name="busqueda">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </form>
                </div>
                <a href="{{ route('service.create') }}" class="btn btn-warning">Create Service</a>
            </div>




            <div class="card-body">
                <h4 class="card-title">Services</h4>
                @if($services->isEmpty())
                    <h3 class="card-title">No services to show</h3>
                @endif
                @if($services->isNotEmpty())
                    <div class="table-responsive">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td scope="row">{{$service->id}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{{$service->description}}}</td>
                                    <td>
                                        <img src="{{asset('storage').'/'.$service->image}}" width="100">
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="{{route('service.edit',$service->id)}}"
                                           class="btn btn-warning d-inline-block">Editar</a>
                                        <form action="{{route('service.destroy',$service->id)}}" method="post"
                                              class="d-inline-block">
                                            @csrf
                                            @method('DELETE')


                                            <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                @endif
            </div>
            @if($services->hasPages())
                <div class="card-footer text-muted">
                    {{$services->links()}}
                </div>
            @endif
        </div>

    </div>
