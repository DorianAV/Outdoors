
    <div class="container">
        @if(Session::has('message'))
            <div
                class="alert alert-{{ Session::get('type') == 'success' ? 'success' : 'danger' }} alert-dismissible fade show"
                role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ Session::get('message') }}</strong>
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <form action="" method="get" class="d-flex">

                        <input type="text" class="form-control" placeholder="Find Services" style="max-width: 200px;" request="busqueda" name="busqueda">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </form>
                    <a href="{{ route('service.create') }}" class="btn btn-success">Create Service</a>
                </div>
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
                                            <input type="submit" value="Borrar" class="btn btn-danger">
                                        </form>
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
