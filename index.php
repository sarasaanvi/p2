<html>
	<header>
		<title>Password Generator</title>
		<link rel="stylesheet" type = "text/css" href="style_hemadri.css"/>	
		<?php require 'logic.php'?>
	</header>
				
		<div class="myContainer">
			<h1> Password Generator</h1>
			<p>Welcome to the Password Generator !!!</p>
			<p>This helps you in generating a password according to your needs which is easy to remember but hard to crack. Please specify
			the number of words which you want to include(default being 2), number of numerics (default being 0), number of special characters (default being 0), 
			word separator(default being None) and finally the word case (default is all lower).
			Click on the "Generate" button to get your password.
			</p>
			<br>
			<div class = "subContainer_div">
				<content>					
					<p>Your Password is : </p>							
					<p><?php echo $password ?></p>										
				</content>
				<form method ="POST" action = 'index.php'>				
				<div id="group">
					<label>Include Numbers :</label>					
					<select name="numbers" >
						<option value ="0">0</option>
						<option value ="1">1</option>
						<option value ="2">2</option>
						<option value ="3">3</option>
						<option value ="4">4</option>
					</select>
				</div>
				<div id="group">
					<label>Include Symbols</label>
					<select name ="symbols">
						<option value ="0">0</option>
						<option value ="1">1</option>
						<option value ="2">2</option>
						<option value ="3">3</option>
						<option value ="4">4</option>
					</select>
				</div>
				<div id="group">
					<label>Numbers of words:</label>				
					<select name="wordsCount">
						<option value ="0">0</option>
						<option value ="1">1</option>
						<option value ="2" selected= "selected">2</option>
						<option value ="3">3</option>
						<option value ="4">4</option>
						
					</select>
				</div>
				<div id="group">
					<label>Separator:</label>
					<select name="separator">
						<option value ="none">None</option>					
						<option value ="space">Space</option>
						<option value ="hyphen">-</option>				
					</select>
				</div>
				<div id="group">
					<label>Word Case :</label>
					<select name="capital">
						<option value ="Lower">Lower</option>
						<option value ="Upper">Upper</option>
						<option value ="First">Camel</option>
									
					</select>
				</div>
				<br>				
				<br>
				<div id="group">
					<input type ="submit" id = "button" value= "Generate" />
				</div>
			</div>
								
			<br>
				
		  </div>
		  
		
		
	

</html>
