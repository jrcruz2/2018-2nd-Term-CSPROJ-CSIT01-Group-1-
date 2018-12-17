@extends('layouts.app')

@section('content')
<header class="w3-container w3-center"> 
    <h1><b>Section</b></h1>
</header>
  
<div class="w3-row">
    <div class="w3-col lg 12">
        <div class="w3-card-4 w3-margin w3-black">
            <div class="w3-container">
                <div class="padding">
                    <br>
                    <div class="w3-center">
                        <i class="fas fa-chalkboard-teacher fa-7x"></i>
                    </div>
                            <br>
                    <header>
                        <div class="w3-center">
                            <h3 class="w3-xxlarge w3-lobster"> Faculty Register </h3>
                        </div>
                    </header>
                    {!! Form::open(['action' => 'TeacherController@store', 'method' => 'POST']) !!}
                        <b> {{ Form::label('last_name', 'Last Name') }} </b>
                        {{ Form::text('last_Name', '', ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                        <b> {{ Form::label('first_name', 'First Name') }} </b>
                        {{ Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                        <b> {{ Form::label('address', 'Address') }} </b>
                        {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
                        <b> {{ Form::label('email', 'Email') }} </b>
                        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        <b> {{ Form::label('password', 'Password') }} </b>
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                        <br>
                        {{ Form::submit('Register', ['class' => 'btn btn-success w3-padding-large']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
