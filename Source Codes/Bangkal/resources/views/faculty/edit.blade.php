@extends('layouts.app')

<style>
    .button-position {
        position: absolute;
        top: 52px;
        left: 0px;
    }
    .content-position {
        position: absolute;
        top: 20px;
    }
    header {
        color: white;
        font-family: "Walter Turncoat", cursive;
        font-size: 50px;
    }
    .table-padding {
        padding: 10px 10px 10px 10px;
    }

</style>

@section('content')
@extends('inc.sidebar-faculty')

<div id="main">
    <div class="button-position">
        <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
    </div>

    <header class="w3-container w3-center w3-padding-48">
        <a> Edit Class Record </a>
    </header>

    <div class="w3-row">            
        <div class="w3-col lg 12">
  
          <div class="w3-card-4 w3-margin w3-white">
            <div class="w3-container">
                <div class="padding">
                    <a href="/home" class="btn btn-success btn-lg"> Go Back </a> <br> <br>
                    <h3><b>Edit Class Record</b></h3>
                </div>
            </div>
          
            <div class="w3-container">
              <div class="padding">
                    {!! Form::open(['action' => ['ClassRecordController@update', $classrecord->id], 'method' => 'POST']) !!}
                        {{ Form::label('section', 'Section Name') }}
                        {{ Form::text('section', $classrecord->section, ['class' => 'form-control', 'placeholder' => 'Section Name']) }}  
                        {{ Form::label('grade_level', 'Grade Level') }}
                        {{ Form::text('grade_level', $classrecord->grade_level, ['class' => 'form-control', 'placeholder' => 'Grade Level']) }} 
                        {{ Form::label('subject', 'Subject') }} 
                        {{ Form::text('subject', $classrecord->subject, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
                        <br>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update Class Record', ['class' => 'btn btn-primary btn-lg']) }}
                    {!! Form::close() !!}
              </div>
            </div>
          </div>
          <hr>
  
        </div>
      </div>   
            
  </div>
  
  <script>
          function w3_open() {
            document.getElementById("main").style.marginLeft = "25%";
            document.getElementById("mySidebar").style.width = "25%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
          }
          function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
          }
  </script>
  @endsection