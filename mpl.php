<!DOCTYPE html>
<html>
	<head>
	<title>Bollywood Montpellier</title>
 	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
   	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
   	</head>
   	

	<body>
		<!--Mot de passe correct-->
		<?php
			if (isset($_POST['login']) AND $_POST['login'] == "MPL") 
			{
		?>
		<div class="container">        
        <div class="row">
        	<h3 class= "col-md-12">Bonne répétition !<br/></h3>
          <div class="col-md-6"><a href="https://drive.google.com/open?id=1iZXvKkrlBD6lQtTO72LITfWRpwpAwMZw"><img src="https://i.ytimg.com/vi/el3i9_xGEYw/maxresdefault.jpg" alt="Manohari"/></a></div>
        	<div class="col-md-6"><a href="https://drive.google.com/open?id=1qaHB6Z2tFqAvBO9ka0giymNutjXVjOzf"><img  src="https://i.ytimg.com/vi/QfertJbuzEo/maxresdefault.jpg" alt="Ghoomar"/></a></div>
        <div class="row">
          <div class="col-md-12"><br/><br/></div>
        </div>
        <div class="row">
        <div class="col-md-6"><a href="https://drive.google.com/open?id=1qaHB6Z2tFqAvBO9ka0giymNutjXVjOzf"><img  src="https://i.ytimg.com/vi/VVO-60PFuBw/maxresdefault.jpg" alt="Dhivara"/></a></div>
        <div class="col-md-6"><a href="https://drive.google.com/open?id=1boTpgbeojjFUyodaaYSvnz5e1Abo3puS"><img src="http://www.bollywoodhelpline.com/upload/articles/dbc6aixu0aihvec3478411.jpg?maxheight=350" alt="Final Paisa Yeh Paisa"/></a></div>
      </div>
 	<?php
}
else // Mot de passe incorrect
    {
        
        header('Refresh:2;url=index.html');
        
?>
      <div class ="container">
      <div class="message col-md-9"><?php echo"Le mot de passe utilisé est incorrect !<br/>Essaie à nouveau.</p>";
    } 
?>
    </body>
    </html>
 	


