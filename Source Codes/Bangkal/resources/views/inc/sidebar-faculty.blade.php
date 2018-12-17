<style>
      .navbar-position {
        position: absolute;
        top: 52px;
      }
</style>
<div class="navbar-position">
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-black" style="display:none" id="mySidebar">
      <button class="w3-bar-item w3-button w3-large" onclick="w3_close()"><i class="fas fa-window-close fa-2x"> Close</i> </button> <br>
      <a href="{{ url('/home') }}" class="w3-bar-item w3-button"><i class="fas fa-home fa-2x"> Home</i></a> <br>
      <a href="{{ url('/class/create') }}" class="w3-bar-item w3-button"><i class="fas fa-plus fa-2x"> Create New Class Record </i></a> <br>
      <a href="{{ url('/class') }}" class="w3-bar-item w3-button"><i class="fas fa-list-ul fa-2x"> View Class Records </i></a> <br>
  </div>
</div>