@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <a href="/department/show">
            <button class="btn-primary">
                Show Departments
            </button>
        </a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table {{$judul}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NAMA</th>
                        <th>CODE</th>
                    </tr>
                    @foreach($data->position as $d)
                        <tr>
                            <td>#</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->code}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-4">

    </div>
@endsection
