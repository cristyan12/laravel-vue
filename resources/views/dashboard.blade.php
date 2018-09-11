@extends('app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h1 class="display-4">CRUD Laravel y VUEjs</h1>
    </div>
</div>
<div id="crud" class="row">
    <div class="col-sm-7">
        <a href="#" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#create">
            Nueva Tarea
        </a>
        <table class="table table-hover table-stripep">
            <thead>
                <th>ID</th>
                <th>Tarea</th>
                <th colspan="2">
                    &nbsp;
                </th>
            </thead>
            <tbody v-for="keep in keeps">
                <tr>
                    <td width="10px">@{{ keep.id }}</td>
                    <td>@{{ keep.keep }}</td>
                    <td width="10px">
                        <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editKeep(keep)">Editar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <nav>
            <ul class="pagination">
                <li class="page-item" 
                    v-if="pagination.current_page > 1"
                >
                    <a href="#" class="page-link" 
                        @click.prevent="changePages(pagination.current_page - 1)"
                    >
                        <span>Atrás</span>
                    </a>
                </li>

                <li class="page-item"
                    v-for="page in numberOfPages" 
                    v-bind:class="[ page == isActived ? 'active' : '']"
                >
                    <a href="#" class="page-link"
                        @click.prevent="changePages(page)">
                        @{{ page }}
                    </a>
                </li>
                
                <li class="page-item" 
                    v-if="pagination.current_page < pagination.last_page"
                >
                    <a href="#"  class="page-link" 
                        @click.prevent="changePages(pagination.current_page + 1)"
                    >
                        <span>Siguiente</span>
                    </a>
                </li>
            </ul>
        </nav>

        @include('create')
        @include('edit')
    </div>
    <div class="col-sm-5">
        <div class="card bg-light mb-3">
            <div class="card-body">
                <pre>
                    @{{ $data }}
                </pre>
            </div>
        </div>
    </div>    
</div>

@endsection