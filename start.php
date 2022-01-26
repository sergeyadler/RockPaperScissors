<?php
session_start();


if(isset($_GET['exit']) == 1){
session_destroy();
header('Location: start.php');


}
?>
<!--// <?php 

// if(isset($_SESSION['counter']))
	// echo 'Runde : '.$_SESSION['counter'];
	// if($_SESSION['counter']>= 5){
	// header('Location: test2.php');
	// exit();
	// }


// ?>-->
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<meta charset="utf8" name="viewport" content="width=device-width">

     <title>Rock Paper Scissors Game</title>
</head>
<body>
<h1> Rock Paper Scissors Game</h1>
<div id="title2">
    <p>Please Choose Your Player</p>
	</div>
<div>
<form action="result.php" method="post">

   <div> <h2>
   <img src="img/rock.png" class="scissors"><input type="radio" value="rock" name="playerturn"   />
       <img src="img/paper.png" class="scissors"><input type="radio" value="paper" name="playerturn"  />
       <img src="img/scissors.png" class="scissors"><input type="radio" value="scissors" name="playerturn" />
    </h2>
	</div>
    <p><input type="submit" value="Play" class="submit"></p>
</form>
</div>
</body>
</html>