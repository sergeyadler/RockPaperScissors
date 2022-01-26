<?php
// Start the session
session_start();
?>
<!--<?php 
// $_SESSION['playerturn']= $_POST['playerturn'];
// if(isset($_POST['playerturn'])){
// if(!isset($_SESSION['counter'])){
	// $_SESSION['counter'] = 0;
	// }else{
		// $_SESSION['counter']++;
	// }
// }

// ?>-->
<html>
<head>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<h1> Rock Paper Scissors Game</h1>
<?php
if(empty($_SESSION['your_win'])  &&
    empty($_SESSION['cpu_win'])  && 
   empty($_SESSION['draw']) && empty($_SESSION['total'])     ){
    $_SESSION['your_win'] = 0;
    $_SESSION['cpu_win'] = 0;
    $_SESSION['draw'] = 0;
	$_SESSION['total'] =0;
    //Printing the initiation of session variables for your reference
    echo $_SESSION['your_win']; 
    echo $_SESSION['cpu_win'];
    echo $_SESSION['draw'] ;
	echo $_SESSION['total'];
}
    $playerturn = $_POST['playerturn'];
    $rpc= array('rock', 'paper', 'scissors');
    $rndm= rand(0,2);
    $Computer=$rpc[$rndm];

    echo '<h2>You picked: '.$playerturn.'</h2>';
    echo '<br /><br />';
    echo '<h2>The computer picked: '. $Computer .'</h2>';
  echo '<br /><br />';  
  
    if ($playerturn == $Computer){
        $_SESSION['draw']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
    }
    else if($playerturn == 'rock' && $Computer == 'scissors'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Win!</h1>';
}
    else if($playerturn == 'rock' && $Computer == 'paper'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo  '<h1>You Lose! </h1>';
}
    else if($playerturn == 'scissors' && $Computer == 'rock'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>"; 
        echo  ' <h1>You Lose!</h1> ';
}
    else if($playerturn == 'scissors' && $Computer == 'paper'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";   
        echo '<h1> You Win! </h1>';
}
    else if($playerturn == 'paper' && $Computer == 'rock'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Win!</h1>';
}
    else if($playerturn == 'paper' && $Computer == 'scissors'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Lose!</h1>' ;
}

?>
<hr>
</br></br>
<button type="submit" onclick="window.location.href='start.php'" class="retry">Play Again</button><br>
<button type = "submit" class="exit"><a href="start.php?exit=1">EXIT</a></button>
</body>
</html>