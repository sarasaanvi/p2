<html>
	<header>
		<title>Password Generator</title>
		<link rel="stylesheet" type = "text/css" href="style_hemadri.css">	
		<?php require 'logic.php'?>
	</header>
	<body>
		<h1> Password Generator</h1>
		<div class="myContainer">
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
					<label>First Letter Capital:</label>
					<select name="capital">
						<option value ="no">No</option>
						<option value ="yes">Yes</option>
									
					</select>
				</div>
				<br>				
				<br>
				<div id="group">
					<input type ="submit" id = "button" value= "Generate" />
				</div>
								
				<br>
				
		  </div>
		  
		</div>
		
	</body>

</html>
