@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Airport</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('artigos.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $artigos->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo:</strong>
            {{ $artigos->tipo }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>
            {{ $artigos->marca }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tamanho:</strong>
            {{ $artigos->tamanho }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sexo:</strong>
            {{ $artigos->sexo }}
        </div>
    </div>

<h1>Current Plane in the airport</h1>
<table class="table table-bordered">
    <tr>
    <th>ID</th>
        <th>Name</th>
        <th>Tipo</th>
        <th>Marca</th>
        <th>Tamanho</th>
        <th>Sexo</th>
        <th width="280px">Action</th>
    </tr>
</table>
@endsection