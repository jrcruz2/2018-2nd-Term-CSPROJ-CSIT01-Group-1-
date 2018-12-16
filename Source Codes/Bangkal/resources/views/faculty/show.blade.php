@extends('layouts.faculty-layout')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fas fa-align-left"></i> Toggle Menu</a>
        <a href="/classrecords" class="btn btn-primary"> Go Back </a>
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
                    <h3> {{$classrecord->section}} </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"><b>Section Name: {{$classrecord->section}}</b> </div>
                        <div class="col"><b>Grade Level: {{$classrecord->grade_level}}</b> </div>
                        <div class="col"><b>Subject: {{$classrecord->subject}}</b> </div>
                    </div>
                    <hr>
                    <div>
                        <a href="/grades/{{$classrecord->id}}" class="btn btn-primary"> Add Student </a>
                    </div>
                    <hr> 
                    <table class="table table-striped">
                        <tr>
                            <th> Student </th>
                            <th> 1st Grading </th>
                            <th> 2nd Grading </th>
                            <th> 3rd Grading </th>
                            <th> 4th Grading </th>
                            <th> Final Grade </th>
                            <th> </th>
                        </tr>
                        <tr>
                            <td> Mark Justine Apit </td>
                            <td> 98 </td>
                            <td> 95 </td>
                            <td> 97 </td>
                            <td> 98 </td>
                            <td> 97 </td>
                            <td> <a href="#" class="btn btn-primary">Edit Grade</a> </td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="/classrecords/{{$classrecord->id}}/edit" class="btn btn-primary"> Edit {{$classrecord->section}} </a> 
                        {!!Form::open(['action' => ['ClassRecordsController@destroy', $classrecord->id], 'method' => 'POST', 'class' => 'pull-right'])!!} <br>
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete Section', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection