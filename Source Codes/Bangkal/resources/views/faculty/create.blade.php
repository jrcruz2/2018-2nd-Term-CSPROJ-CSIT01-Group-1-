@extends('layouts.faculty-layout')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fas fa-align-left"></i> Toggle Menu</a>
    </div>
</div>
<hr>
<!-- /#page-content-wrapper -->

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-11">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">
                    <h3> Create Class Record </h3>
                </div>
                <br>
                <div class="container">
                    @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation"></i> {{$error}}
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ClassRecordsController@store', 'method' => 'POST']) !!}
                        <div class="form-group row">
                            <div class="col-md-2 col-form-label text-md-right">
                                {{Form::label('section', 'Section')}}
                            </div>
                            <div class="col-md-10">
                                {{Form::text('section', '', ['class' => 'form-control', 'placeholder' => 'Section'])}}
                            </div>
                            <div class="col-md-2 col-form-label text-md-right">
                                {{Form::label('grade_level', 'Grade Level')}}
                            </div>
                            <div class="col-md-10">
                                {{Form::number('grade_level', '', ['class' => 'form-control', 'placeholder' => 'Grade Level'])}}
                            </div>
                            <div class="col-md-2 col-form-label text-md-right">
                                {{Form::label('subject', 'Subject')}}
                            </div>
                            <div class="col-md-10">
                                {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Subject'])}} 
                            </div>
                            <div class="col-md-8 offset-md-2">
                                {{Form::submit('Add Class Record', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

