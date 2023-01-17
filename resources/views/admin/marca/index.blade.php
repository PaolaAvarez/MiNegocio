
@extends ('layouts.admin')
@section ('title','Marcas')
@section ('styles')
@endsection
@section ('options')
@endsection
@section ('preference')
@endsection
@section ('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            LISTADO DE MARCAS
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" >Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Marcas</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Marcas</h4>

                   
                    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSS Bootstrap Versión 5.2 -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
          crossorigin="anonymous"
        />
      </head>
      <body>
        <div class="dropdown">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Opciones
          </button>
          <ul class="dropdown-menu">
          <a href="{{route('marcas.create')}}" class="dropdown-item">Agregar</a>

          <!--   <li><a class="dropdown-item" href="#">Another action</a></li> -->
            
          </ul>
        </div>
        <!-- JS Bootstrap v5.2 -->
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
          crossorigin="anonymous"
        ></script>


                    
                </div>  

                <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($marcas as $marca)
                            <tr>
                                <th scope="row">{{$marca->id}}</th>
                                <td>
                                    <a href="{{route('marcas.show',$marca)}}">
                                        {{$marca->nombre}}</a>    
                                    </td>
                                    <td>{{$marca->descripcion}}</td>
                                    <td style="width:50px;">
                                    {!! Form::open(['route'=>['marcas.destroy',
                                        $marca],'method'=>'DELETE']) !!}
                                        <a class="jsgrid-button jsgrid-edit-button" href="{{route('marcas.edit', $marca)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="jsgrid-button jsgrid-delete-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
 
