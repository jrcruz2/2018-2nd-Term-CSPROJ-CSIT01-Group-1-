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

        <div class="col-12 text-center">
            <h1> Bangkal Elementary School - Main </h1>
            <h2> Grade Record Management System </h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="/classrecords/create" class="btn btn-primary btn-lg"> Create Class Record </a>
        </div>
    </div>
</div>
@endsection
