<!DOCTYPE html>
 <html>
 
 <head>
	<title>Counter Example</title>
	<style>
		*
		{
			font-family: verdana;
			font-size: 10pt;
		}
		body
		{
			margin-left: .5in;
			margin-right: .5in;
		}
		.number
		{
			width: .70in;
			height: .35in;
			border: dashed 1px green;
			margin: 1px;
			display: inline-block;
			text-align: center;
			-display: table-cell;
			 vertical-align:middle;
			 padding-top: 15px;
			 
		}
		h1
		{
			font-size: 200%;
		}
		.mark
		{
			background-color: yellow	!important; 
			color: red	!important;
		}
		
		.even
		{
			background-color: silver;
			color:white;
			font-size: 130%;
		}
		
		.odd
		{
			background-color: black;
			color:white;
			font-size: 130%;
		}
		
		.description
		{
			border: solid 1px black;
			text-indent: 10px;
			margin-bottom: .25in;
		}
		
		.width{
			width: 7.9in;
		}
	</style>
 
 </head>
 <body>

 
	<h1> PHP Loops 3 Post Version</h1>
	<div class="description width">
	<p> Often when you write code, you want the same block 
	of code to run over and over again in a row. Instead of 
	adding several almost equal code-lines in a script, 
	we can use loops to perform a task like this.</p>
	<p>
	In PHP, we have the following looping statements:
	<ol>
		<li>while - loops through a block of code as long as the specified condition is true</li>
		<li>do...while - loops through a block of code once, and then repeats the 
			loop as long as the specified condition is true</li>
		<li>for - loops through a block of code a specified number of times</li>
		<li>foreach - loops through a block of code for each element in an array</li>
	</ol>
	</p>
	</div>
	<div class="width">
	    <% 
		
		function get($pLimit, $plimit2){			

			if ( isset( $_POST[$pLimit])  )
			{
				$highLight = $_POST[$pLimit];
			}
			else
			{
				$highLight = $plimit2;
			}	
			return $highLight;
		}
		
		$limit = get("limit",102);	
		$highLight = get("highlight",50);
		$highLightEven = get("even","N");		
		
		$markThis = "";		
		
		for ($i = 1; $i <= $limit; $i++) {   
			if ($i == $highLight)
			{
				$markThis = "mark";
			}
			// even test
			$oddOrEven = "";
			$isEven = $highLightEven=="E";
			$isOdd = $highLightEven=="O";
			if ($i % 2==0 && $isEven){
			    $oddOrEven="even";
			}
			elseif ($i % 2==1 && $isOdd){
			    $oddOrEven="odd";
			}
		%>
		<div class='<%=$oddOrEven%> number <%=$markThis%>'><%= $i %></div>			
		<% 
			$markThis = "";
		
		}%>
	</div>
	</width>

 </body>
 </html> 