<!DOCTYPE html>
<html>
<title>Bangkal Elementary School - Main</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<style>

    h1 {
        font-family: "Walter Turncoat", cursive;
        color: white;
        font-size: 50px;
    }

    body {
        background-image: url('https://i.imgur.com/hbeWizm.jpg');
    }

    .studentButton {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 15px;
        background-image: url('https://i.imgur.com/hbeWizm.jpg');
        color: white;
        text-decoration:none; 
        font-family: "Walter Turncoat", cursive;
        font-size: 24px;
        padding-right: 42px;
        padding-left:  42px;
        padding-top: 40px;
        
    }

    .facultyButton {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 15px;
        background-image: url('https://i.imgur.com/hbeWizm.jpg');
        color: white;
        font-family: "Walter Turncoat", cursive;
        font-size: 24px;
        display: inline-block;
        padding-right: 40px;
        padding-left:  40px;
        padding-top: 40px;
    }

    .registrarButton {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 15px;
        background-image: url('https://i.imgur.com/hbeWizm.jpg');
        color: white;
        font-family: "Walter Turncoat", cursive;
        font-size: 24px;
        padding-right: 30px;
        padding-left:  30px;
        padding-top: 40px;


    }

    .facultyButton:active, .registrarButton:active, .studentButton:active {
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        text-decoration:none; 
    }

</style>

<body>

<br> <br> <br>

<!-- Header -->
<header>
  <div class="w3-center">
    <h1 class="w3-animate-top">Bangkal Elementary School - Main</h1>
    <h1 class="w3-animate-bottom">Grade Record Management System</h1>
  </div>
</header>

<div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
            <div class="w3-container">
                <a href="{{ url('/student/login') }}">
                    <button class="studentButton">
                        <i class="fas fa-user-graduate fa-3x"> </i>
                        <br> <br>  Student
                    </button>
                </a>
            </div>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-container">
                <a href="{{ url('/login') }}">
                    <button class="facultyButton">
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                        <br> <br>  Faculty
                    </button>
                </a>
            </div>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-container">
                <a href="{{ url('/registrar/login') }}">
                    <button class="registrarButton">
                        <i class="fas fa-registered fa-3x"></i>
                        <br> <br>  Registrar
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
