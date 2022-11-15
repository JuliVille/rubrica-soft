@extends('layouts.backend.master')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>@lang(Str::ucfirst(Request::segment(1)))</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Panel</a></li>
                        <li><a href="#">Forma</a></li>
                        <li class="active">Tablas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('jambasangsang.backend.categories.field')
@endsection
