@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
        <li><a href="#">Create</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$judul}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/inventory" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="id_archive" value="{{$data->archive->id}}">
                        </div>


                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" value="{{$data->description}}" name="description" placeholder="Masukkan description">
                        </div>
                        <div class="form-group">
                            <label>Archive Type</label>
                            <input type="text" class="form-control" value="{{$data->archive->name}}" name="archive_name" placeholder="Masukkan Archive Nama">
                        </div>
                        <div class="form-group">
                            <label>Archive Description</label>
                            <input type="text" class="form-control" value="{{$data->archive->description}}" name="archive_description" placeholder="Masukkan Archive Description">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            <div class="col-md-4">
            </div>
        </div>
@endsection

