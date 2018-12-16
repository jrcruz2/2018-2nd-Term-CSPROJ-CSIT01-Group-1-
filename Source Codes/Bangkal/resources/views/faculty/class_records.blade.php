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
                    <h3> List of Class Records </h3>
                </div>
                <div class="card-body">
                    @if(count($classrecords) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th> Section </th>
                                <th> Grade Level </th>
                                <th> Subject </th>
                                <th> </th>
                            </tr>
                            @foreach ($classrecords as $classrecord)
                                <tr>
                                    <td> {{$classrecord->section}} </td>
                                    <td> {{$classrecord->grade_level}} </td>
                                    <td> {{$classrecord->subject}} </td>
                                    <td> 
                                        <a href="classrecords/{{$classrecord->id}}" class="btn btn-primary"> View </a>
                                </tr>
                            @endforeach
                        @else
                            <div class="text-center">
                                <h1> You have no class records </h2>
                            </div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection