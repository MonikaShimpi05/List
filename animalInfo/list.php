 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
   <!--
        <center>
    <h1>animal list</h1>
      Name :<?php echo $_POST["name"];?><br>
    catagory :<?php echo $_POST["catagory"];?><br>
    Description :<?php echo $_POST["description"];?>
    
</center>-->
<div class="container">
<table class="table">
	<thead>
		<tr>
	    
	    <th>Animal Name</th>
		<th>Catagory</th>
		<th>Description</th>
        <th>Life Expectancy</th>
		</tr>
	</thead>
	<tbody>	
	 <tr>
                    
					<td><?php echo $_POST['name']; ?></td>
					<td><?php echo $_POST['catagory']; ?></td>
					<td><?php echo $_POST['description']; ?></td>
                    <td><?php echo $_POST['lifeexpectancy']; ?></td>
                    
					
    </tr>	
			
					 	
         				
	
	        	
	</tbody>
</table>
	</div>

</body>
</html>