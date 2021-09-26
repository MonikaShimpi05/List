
<?php
       $no1=rand(1,100);
       $no2=rand(1,100);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link ref="stylesheet" href="style.css">
    <style>
        body{
        background-color:black;
        color:white;
        }
    
        
    
    </style>
    <title>Animal Information submition</title>
</head>
<body>
    <?php
        
        if(isset($_POST["submit"]))
        {
            
               
               $name=$_POST["name"];
               $catagory=$_POST["catagory"];
               $description=$_POST["description"];
               $lifeexpectancy=$_POST["lifeexpectancy"];
               /*$fileToUpload=$_POST["fileToUpload"];*/
        }
    ?>
    <center>
    <form action="list.php" method="POST" enctype = "multipart/form-data">
        Name:&nbsp;&nbsp;&nbsp;<input type="text" name="name"><br>
        Select catagory:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><input type="radio" name="catagory" <?php if(isset($catagory) && $catagory=="herbivores")echo"checked";?>value="herbivores">herbivores<br>
        <input type="radio" name="catagory"  <?php if(isset($catagory) && $catagory=="omnivores")echo"checked";?> value="omnivores">omnivores<br>
        <input type="radio" name="catagory" <?php if(isset($catagory) && $catagory=="carnivores")echo"checked";?>  value="carnivores">carnivores<br><br>

        Description:&nbsp;&nbsp;&nbsp;<textarea name="description" rows="4" cols="30" value="<?php echo $description;?>"></textarea><br>
        
       <!-- Select image to upload:&nbsp;&nbsp;&nbsp;
        <input type="file" name="fileToUpload"/><br><br>
-->
        Life Expectancy:<br>
        <input type="radio" name="lifeexpectancy"<?php if(isset( $lifeexpectancy) && $lifeexpectancy=="0-1 year")echo"checked";?> value="0-1 year">0-1 year<br>
        <input type="radio" name="lifeexpectancy" <?php if(isset( $lifeexpectancy) && $lifeexpectancy=="1-5 year")echo"checked";?>  value="1-5 year">1-5 year<br>
        <input type="radio" name="lifeexpectancy" <?php if(isset( $lifeexpectancy) && $lifeexpectancy=="5-10 year")echo"checked";?>  value="5-10 year">5-10 year<br><br>
        
    
                Captcha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $no1."+".$no2;?><br>
                <input type="hidden" name="no1" value="<?php echo $no1?>">
                <input type="hidden" name="no2" value="<?php echo $no2?>">
                <input type="text" name="userans">
               <!-- <input type="submit" name="submit1" class="btn btn-success" value="check"><br><br>--> 
        
    
        <input type="submit" name="submit"class="btn btn-success" value="Send"/> 
    </form> 
    <?php
       if(isset($_REQUEST["submit1"]))
       {
           $userans=$_REQUEST["userans"];
           $number1=$_REQUEST["no1"];
           $number2=$_REQUEST["no2"];
           $total=$number1+$number2;
           if($total==$userans)
           {
               echo "you are human";
           }
           else
           {
               echo "you are robot";
           }
       }

    ?>

    
    </center>

</body>
</html>