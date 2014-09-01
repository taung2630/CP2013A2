<?php    
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Movies</title>

</head>


<body>
<div id="wrap">
	<div id="header">				
		<h1 id="logo">Group<span class="green">4</span>Cinemas<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinemas in Singapore</h2> 
		<ul>
			<li><a href="index.php"><span>Home</span></a></li>
			<li id="current"><a href="movies.php"><span>Movies</span></a></li>
            <li><a href="booking.php"><span>Booking</span></a></li>
            <li><a href="about.php"><span>About</span></a></li>
            <li><a href="feedback.php"><span>Feedback</span></a></li>
            <li><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
            <p align="center"><a href="https://www.yahoo.com/movies" target="_blank">Yahoo Movies</a></p>
            <p align="center"><a href="http://www.youtube.com/user/movieclipsTRAILERS/videos" target="_blank">Youtube Movies Trailers</a></p>
           	
		</div>
		<div id="main">	
		<?php
		date_default_timezone_set('Asia/Singapore');
		$presentdate = date('Y-m-d');
		if ($_SESSION['login']=="1" && $_SESSION['CinemaNo']== null || $_SESSION['login']=="2" && $_SESSION['CinemaNo']== null){
			echo "<center><h3>Choose a cinema to book your tickets first</center></h3>";
			
		}
 		 elseif ($_SESSION['login']=="1" && $_SESSION['CinemaNo']=="Downtown Cinema" || $_SESSION['login']=="2"  && $_SESSION['CinemaNo']=="Downtown Cinema"){
		 echo '<h3 align="center">You are now booking for '.$_SESSION['CinemaNo'].'</h3>';
		 echo '<h2 align="center">Now Showing</h2>
         <form action="booking.php" method="post" name ="movie">
         <p><center>
<select name="time">
<option value="9:00">9:00</option>
<option value="12:00">12:00</option>
<option value="15:00">15:00</option>
<option value="18:00">18:00</option>
<option value="21:00">21:00</option>
</select> Select Showtime</center></p>
<center>Choose your date: <br /><br /><input type="date" name="bday" value ="'.$presentdate.'"   min = "'.$presentdate.'"></center><br />
         
        	<div id="fiftyleft">
            	<img src="images/Transformer.jpg" alt="Transfomers"  />
            	<p>Transformers: Age of Extinction (PG13/Action Violence & Brief Coarse Language) 165 Minutes <br />Time: 9:00, 12:00, 15:00, 18:00, 21:00</p><input type="radio" name="moviename" value = "Transformers: Age of Extinction" />Transformers: Age of Extinction<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center>
                <br  /><br  />
            	<img src="images/Deliver us from evil.jpg" alt="Deliver us from Evil" />
                <p>Deliver us From Evil (NC16/Coarse Language & Some Disturbing Scenes)
118 minutes<br />Time: 9:00, 12:00, 15:00, 18:00, 21:00</p>
<input type="radio" name="moviename" value = "Deliver Us From Evil" />Deliver us from evil<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />

				<img src="images/Teenage Mutant Ninja Turtles.jpg" alt="Teenage Mutant Ninja Turtles" />
                <p>Teenage Mutant Ninja Turtle <br />(PG/Some Violence) 102 minutes <br/> Time: 9:00, 12:00, 15:00, 18:00, 21:00</p><input type="radio" name="moviename" value = "Teenage Mutant Ninga Turtles" />Teenage Mutant Ninga Turtles<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
                
            
            </div>
        	<div id="fiftyright">
            	<img src="images/Dawn of The Planet of the Apes.jpg" alt="Dawn of the planet of the apes" height="333" />
              <p>Dawn of the Planet of the Apes (2014) (PG13/Some Violence) 131 minutes <br /> Time: 9:00, 12:00, 15:00, 18:00, 21:00</p><input type="radio" name="moviename" value = "Dawn of the Planet of the Apes" />Dawn of The Planet of the Apes<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br />
              <br  />
              <img src="images/22 Jump Street.jpg" alt="22 Jump Street" />
              
              <p>22 Jump Street (M18/Coarse Language & Sexual References) 112 minutes<br /> Time: 9:00, 12:00, 15:00, 18:00, 21:00</p><input type="radio" name="moviename" value = "22 Jump Street" />22 Jump Street<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
              
              <img src="images/Guardian of the Galaxy.jpg" alt="Marvels Guardians of the Galaxy "/>
              <p>Marvels Guardians of the Galaxy <br />(PG13/Violence) 121 minutes <br/> Time: 9:00, 12:00, 15:00, 18:00, 21:00</p><input type="radio" name="moviename" value = "Marvels Guardians of the Galaxy" />Marvels Guardians of the Galaxy<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
        </div></form>    
              </div>';
			  }
			 elseif ($_SESSION['login']=="1" && $_SESSION['CinemaNo']=="Jurong Cinema" || $_SESSION['login']=="2"  && $_SESSION['CinemaNo']=="Jurong Cinema"){
		 echo '<h3 align="center">You are now booking for '.$_SESSION['CinemaNo'].'</h3>';
		 echo '<h2 align="center">Now Showing</h2>
         <form action="booking.php" method="post" name ="movie">
         <p><center>
<select name="time">
<option value="11:00">11:00</option>
<option value="14:00">14:00</option>
<option value="17:00">17:00</option>
<option value="20:00">20:00</option>
<option value="23:00">23:00</option>
</select> Select Showtime</center></p>
<center>Choose your date: <br /><br /><input type="date" name="bday" value ="'.$presentdate.'"   min = "'.$presentdate.'"></center><br />
         
        	<div id="fiftyleft">
            	
            	<img src="images/Deliver us from evil.jpg" alt="Deliver us from Evil" />
                <p>Deliver us From Evil (NC16/Coarse Language & Some Disturbing Scenes)
118 minutes<br />Time: 11:00, 14:00, 17:00, 20:00, 23:00</p>
<input type="radio" name="moviename" value = "Deliver Us From Evil" />Deliver us from evil<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />

				<img src="images/Teenage Mutant Ninja Turtles.jpg" alt="Teenage Mutant Ninja Turtles" />
                <p>Teenage Mutant Ninja Turtle <br />(PG/Some Violence) 102 minutes <br/> Time: 11:00, 14:00, 17:00, 20:00, 23:00</p><input type="radio" name="moviename" value = "Teenage Mutant Ninga Turtles" />Teenage Mutant Ninga Turtles<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
                
            
            </div>
        	<div id="fiftyright">
            	
              <img src="images/22 Jump Street.jpg" alt="22 Jump Street" />
              
              <p>22 Jump Street (M18/Coarse Language & Sexual References) 112 minutes<br /> Time: 11:00, 14:00, 17:00, 20:00, 23:00</p><input type="radio" name="moviename" value = "22 Jump Street" />22 Jump Street<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
              
              <img src="images/Guardian of the Galaxy.jpg" alt="Marvels Guardians of the Galaxy "/>
              <p>Marvels Guardians of the Galaxy <br />(PG13/Violence) 121 minutes <br/> Time: 11:00, 14:00, 17:00, 20:00, 23:00</p><input type="radio" name="moviename" value = "Marvels Guardians of the Galaxy" />Marvels Guardians of the Galaxy<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
        </div></form>    
              </div>';
			  }
			  elseif ($_SESSION['login']=="1" && $_SESSION['CinemaNo']=="AMK Cinema" || $_SESSION['login']=="2"  && $_SESSION['CinemaNo']=="AMK Cinema"){
		 echo '<h3 align="center">You are now booking for '.$_SESSION['CinemaNo'].'</h3>';		  
		 echo '<h2 align="center">Now Showing</h2>
         <form action="booking.php" method="post" name ="movie">
         <p><center>
<select name="time">
<option value="10:00">10:00</option>
<option value="13:00">13:00</option>
<option value="16:00">16:00</option>
<option value="19:00">19:00</option>
<option value="02:00">02:00</option>
</select> Select Showtime</center></p>
<center>Choose your date: <br /><br /><input type="date" name="bday" value ="'.$presentdate.'"   min = "'.$presentdate.'"></center><br />
         
        	<div id="fiftyleft">
            	<img src="images/Transformer.jpg" alt="Transfomers"  />
            	<p>Transformers: Age of Extinction (PG13/Action Violence & Brief Coarse Language) 165 Minutes <br />Time: 10:00, 13:00, 16:00, 19:00, 02:00</p><input type="radio" name="moviename" value = "Transformers: Age of Extinction" />Transformers: Age of Extinction<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center>
                <br  /><br  />
            	<img src="images/Deliver us from evil.jpg" alt="Deliver us from Evil" />
                <p>Deliver us From Evil (NC16/Coarse Language & Some Disturbing Scenes)
118 minutes<br />Time: 10:00, 13:00, 16:00, 19:00, 02:00</p>
<input type="radio" name="moviename" value = "Deliver Us From Evil" />Deliver us from evil<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
                            
            </div>
        	<div id="fiftyright">
            	<img src="images/Dawn of The Planet of the Apes.jpg" alt="Dawn of the planet of the apes" height="333" />
              <p>Dawn of the Planet of the Apes (2014) (PG13/Some Violence) 131 minutes <br /> Time: 10:00, 13:00, 16:00, 19:00, 02:00</p><input type="radio" name="moviename" value = "Dawn of the Planet of the Apes" />Dawn of The Planet of the Apes<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br />
              <br  />
              <img src="images/22 Jump Street.jpg" alt="22 Jump Street" />
              
              <p>22 Jump Street (M18/Coarse Language & Sexual References) 112 minutes<br /> Time: 10:00, 13:00, 16:00, 19:00, 02:00</p><input type="radio" name="moviename" value = "22 Jump Street" />22 Jump Street<br  /><br  /><center><input name="Submitmovie" type="submit" value="Submit" ></center><br  /><br />
              
              
        </div></form>    
              </div>';}
		else echo '<div id="fiftyleft">
            	<img src="images/Transformer.jpg" alt="Transfomers"  />
            	<p>Transformers: Age of Extinction (PG13/Action Violence & Brief Coarse Language) 165 Minutes<br /><br  />Available at Downtown and AMK cinemas <br /><br />
            	<img src="images/Deliver us from evil.jpg" alt="Deliver us from Evil" />
                <p>Deliver us From Evil (NC16/Coarse Language & Some Disturbing Scenes)
118 minutes<br  /><br />Available at Downtown, AMK and Jurong cinemas <br  /><br />

				<img src="images/Teenage Mutant Ninja Turtles.jpg" alt="Teenage Mutant Ninja Turtles" />
                <p>Teenage Mutant Ninja Turtle <br />(PG/Some Violence) 102 minutes<br  /><br  />Available at Downtown and Jurong cinemas <br /><br />
                
            
            </div>
        	<div id="fiftyright">
            	<img src="images/Dawn of The Planet of the Apes.jpg" alt="Dawn of the planet of the apes" height="333" />
              <p>Dawn of the Planet of the Apes (2014) (PG13/Some Violence) 131 minutes<br  /><br  />Available at Downtown and AMK cinemas<br /><br  />
      
              <img src="images/22 Jump Street.jpg" alt="22 Jump Street" />
              
              <p>22 Jump Street (M18/Coarse Language & Sexual References) 112 minutes<br  /><br />Available at Downtown, AMK and Jurong cinemas <br  /><br />
              
              <img src="images/Guardian of the Galaxy.jpg" alt="Marvels Guardians of the Galaxy "/>
              <p>Marvels Guardians of the Galaxy <br />(PG13/Violence) 121 minutes<br  /><br />Available at Downtown and Jurong cinemas 
        </div></form>    
              </div>' 
			  ;
			
			  
			  ?>
		</div>
		<div id="rightbar">
        
<?php
		include('login.php');
		 ?>  
			<h1>About Group4Cinemas</h1>
			<p>Group4Cinemas offers the best cinemas in Singapore,which show all the latest movies, serve the best food and offer the best viewing experiences, come down and watch movies now or book tickets online!</p></div>
<div id="footer">
	<div class="footer-left">
		<p class="align-left">			
		&copy; 2014 <strong>Group 4 Cinemas</strong> |
		Design by <strong>SP52 2014</strong>
		
		</p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.php">Home</a>&nbsp;|&nbsp;
  		<a href="contact.php">Contact</a>
   	
		</p>
	</div>
	</div>
</div>

</body>
</html>
