<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">


</head>
<body>

  	<div class="beranda">
    		<div class="footer">
      			<div class="logo">
        				<img class="logo-icon" alt="" src="Logo.svg">

        				<div class="title">
          					<div class="nook-studios-team">© 2024 Nook Studio’s Team Design</div>
        				</div>
      			</div>
    		</div>
    		<div class="navigation">
      			<div class="logo">
        				<img class="logo-icon1" alt="" src="Logo.svg">

        				<div class="name">
          					<div class="aplikasi-pos">APLIKASI POS</div>
          					<div class="by-nook-studio">by Nook Studio</div>
        				</div>
      			</div>
      			<div class="top-navigation">
        				<div class="menu" id="menuContainer">
          					<div class="fitur">Beranda</div>
        				</div>
        				<div class="menu1">
          					<div class="fitur">POS</div>
        				</div>
        				<div class="menu2">
          					<div class="fitur">Fitur</div>
          					<img class="expand-more-icon" alt="" src="expand_more.svg">

        				</div>
      			</div>
      			<div class="profil-wrapper">
        				<div class="profil">
          					<div class="profil-child">
          					</div>
          					<div class="name">
            						<div class="fitur">Kevin Nook</div>
            						<div class="administrator">Administrator</div>
          					</div>
        				</div>
      			</div>
    		</div>
  	</div>




  	<script>
    		var menuContainer = document.getElementById("menuContainer");
    		if(menuContainer) {
      			menuContainer.addEventListener("click", function (e) {
        				window.location.href = "Beranda.html"
      			});
    		}</script></body>
</html>
