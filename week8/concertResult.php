<html>
<head>
<title>GIRLS' GENERATION 4TH TOUR - PHANTASIA - IN BANGKOK </title>
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="images/favicon.jpg" type="image/gif" sizes="16*16">
<body>
</body>
</head>
</html>

<?php
	error_reporting(0);
	$luckyDraw = "A-1"; 
	$luckyMessage="";
	$totalPrice = 0;
	$price = 0;
	$selectedSeats = $_POST["seats"];
	
//error no selected seat
		if(empty($selectedSeats)){
			die("<p id='ErrorText'>You have not selected a seat.</p>" . '</br>' .'<a href="concert.php" class="button"> </div>Back</a>');
//error buying more than 4 tickets
			} else if (count($selectedSeats) > 4){
				echo ("<p id='ErrorText'>You have exceeded the limit of 4 seats.</p>". '</br>' .'<a href="concert.php" class="button"> </div>Back</a>');
				} else {
					
//succesful buying
		echo ("<div class='result'>You have bought " . "<div id='seatCount'>". count($selectedSeats). '</div>'. " seats(s) . </br></br> ");
		
//cost of tickets
		foreach($selectedSeats as $selectedSeat){
		
			echo ("<div class='seatings'>" . $selectedSeat . "</div>"." ");
			
				if($selectedSeat[0] == "A"){
					
					$price = 3000;
					
					} else if ($selectedSeat[0] == "B"){
							$price = 2000;
						} else if ($selectedSeat[0] == "C"){
								$price = 1000;
							} else{
								
								}
//lucky draw
			if($selectedSeat == $luckyDraw){
				$price/=2;
				$luckyMessage ="<div id='congratsText'>"."(Congratulations! You won the lucky draw ticket.The price is 50% off!)"."</div>";
				}
								
			echo (":  " . $price . $luckyMessage . "<br>");
			$luckyMessage = "";
				
			$totalPrice += $price;
		}
		
		echo("<br>" . "Total Price: " . "<div class='fa fa-btc'></div>".$totalPrice. "</div>");
		

		}
?>
<script type="text/javascript"></script>