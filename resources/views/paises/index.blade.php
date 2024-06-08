@extends('adminlte::page')

@section('title', 'Panel de Control')

@section('content_header')
<h1>Listado de Paises</h1>
@stop

@section('content')

<div class="container">
    <a href="/paises/create" class="btn btn-primary mb-4">Agregar País</a>

    <table id="areas" class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres del País</th>
                <!--                 <th scope="col">Dirección</th> -->
                <th scope="col" width='180px'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
            <tr>
                <td>{{$pais->id }}</td>
                <td>{{$pais->nombre}}</td>
                <td>
                    <form action="{{route('paises.destroy', $pais->id)}}" method="POST">
                        <a href="/areas/{{$pais->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                </td>

            </tr>

            @endforeach


        </tbody>
    </table>


</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


<script>
    $(document).ready(function() {
        $('#areas').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",
            },

            "lengthMenu": [
                [10, 20, -1],
                [5, 10, 20, "Todo"]
            ],

            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf',
                {
                    extend: 'print',
                    messageTop: 'This print was produced using the Print button for DataTables'
                },
            ]
        });
    });
</script>




@stop