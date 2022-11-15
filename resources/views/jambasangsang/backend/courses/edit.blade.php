@extends('layouts.backend.master')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Editar cursos</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Forma</a></li>
                        <li class="active">Basico</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('jambasangsang.backend.courses.field')
@endsection
