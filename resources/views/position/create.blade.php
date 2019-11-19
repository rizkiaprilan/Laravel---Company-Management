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
                <form role="form" action="/position" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="POST">
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label>Department Id</label>--}}
{{--                            <input type="text" class="form-control" name="department_id" placeholder="Masukkan Department_ID">--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" class="form-control" name="code" placeholder="Masukkan Code">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="department_id">
                                @foreach ($department as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>        //buat dropdown list
                                @endforeach

                            </select>
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

