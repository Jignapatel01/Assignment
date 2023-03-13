<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <center>
    
        <form method="post">
            Enter Year: 
            <input type="text" name="year" placeholder="Year *" required><br><br>
            <input type="button" name="btn" value="submit">
              
        <?php
        if(isset($_POST['btn']))
        {
            $Year=$_POST['year'];
            
      if($Year>=1901 && $Year <=2016)
         {
            echo "$Year is leap year";
         }
        elseif($Year%4==0)
            {
                echo "$Year is leap year";
            }   
        
        else
        {
            echo  " $Year not leap year";
        }
    }
        ?>
  </form>

    </center>
</body>
</html>



