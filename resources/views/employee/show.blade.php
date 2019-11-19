@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <div class="box" >
            <div class="box-header">
                <h3 class="box-title">Data Pengguna {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>DATE</th>
                    </tr>
                    @foreach($data->inventory as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->create_at}}</td>
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
