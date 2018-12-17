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
        <a> VIEW CLASS RECORDS </a>
    </header>

    <div class="w3-row">            
      <div class="w3-col lg 12">

        <div class="w3-card-4 w3-margin w3-white">
          <div class="w3-container">

            <h3><b>CLASS RECORDS</b></h3> <br>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            
          </div>
        
          <div class="w3-container">
            <div class="padding">
            @if(count($classrecords) > 0)
                <table class="w3-table-all">
                    <tr>
                        <th> Section Name </th>
                        <th> Grade Level </th>
                        <th> Subject </th>
                    </tr>
                @foreach ($classrecords as $classrecord)
                    <tr>
                        <td> {{ $classrecord->section }}   </td>
                        <td> {{$classrecord->grade_level}} </td>
                        <td> {{$classrecord->subject}} </td>
                    </tr>
                @endforeach
                </table>
                
            @else
                <h5> No Class Records Added </h5>
            @endif
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
