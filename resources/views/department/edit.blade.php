@extends('layouts.master')

@section('content-header')

    <section class="content-header">
        <h1>
            {{$judul}}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
            <li><a href="#">Create</a></li>
        </ol>
    </section>

@endsection

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $judul }}</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form role="form" action="/department" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{$data->id}}">
                        </div>

                        <div class="form-group">
                            <label >Department Name</label>
                            <input type="text" name="name" value="{{$data->name}}"
                                   class="form-control" placeholder="Masukkan Department Name">
                        </div>

                        <div class="form-group">
                            <label >Department Code</label>
                            <input type="text" name="code" value="{{$data->code}}"
                                   class="form-control" placeholder="Masukkan Department Code">
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
    </div>

@endsection
