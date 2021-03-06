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

</style>

@section('content')
@extends('inc.sidebar-faculty')

<div id="main">
    <div class="button-position">
        <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
    </div>
    <header class="w3-container w3-center w3-padding-48">
        <a> FACULTY HOME </a>
    </header>

    <div class="w3-row">            
      <div class="w3-col l8 s12">

        <div class="w3-card-4 w3-margin w3-white">
          <div class="w3-container">
            <h3><b>TITLE HEADING</b></h3>
            <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
          </div>
        
          <div class="w3-container">
            <table class="table table-striped">
                <tr>
                    <th> Section </th>
                    <th> Subject </th>
                    <th> </th>
                </tr>
                @foreach($classrecords as $classrecord)
                    <tr>
                        <td> {{$classrecord->section}} </td>
                        <td> {{}}
                        <td> 
                            <a href="/class/{{$classrecord->id}}" class="btn btn-success btn-lg"> View </a> 
                                | 
                            <a href="/class/{{$classrecord->id}}/edit" class="btn btn-success btn-lg"> Edit </a>
                        </td>
                    </tr>
                @endforeach
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
