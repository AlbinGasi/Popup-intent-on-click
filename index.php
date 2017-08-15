<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>

<button id="openP">Be informed</button>

<div id="popupM" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>
    <div class="scool-pop"></div>
     <div class="popup-header">
     	<h1>Free White Paper</h1>
     	<p>Implementing iso 27001 with a consultant vs. diy approach</p>
     </div>
     <div class="popup-left">
     	<div class="content-left">
     	<p><span class="check-img"></span>
     		How to work with a consultant
		to implement ISO 27001
     	</p>
     	<p><span class="check-img"></span>
     		The DIY approach to applying
		ISO 27001
     	</p>
     	<p><span class="check-img"></span>
     		The pros and cons of each
		method
     	</p>
     	<p><span class="check-img"></span>
     		Which tacEc is the most
		suitable for your business
     	</p>
		
     	</div>
     	<div class="content-right">
     		<img src="images/implISO.png">
     	</div>
     </div>
     <div class="popup-right">
     	<input type="text" name="first_name" placeholder="First name">
     	<input type="text" name="last_name" placeholder="Last name">
     	<input type="email" name="email" placeholder="Email address">
     	<button id="btn_send">download white paper</button>
     	<div id="loadingImg">
      		<img src="images/loading.gif">
      	</div>
     	<p class="error"></p>
     </div>
<div class="clear-both"></div>
  </div>
</div>

</body>
</html>