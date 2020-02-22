<?php require "../bootstrap.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>    
        
    <title>DevClass</title>
</head>
<body>
    <div class="container">
        <?php 
            try {
                require load();
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        
            
        
        ?>    
    </div>    
</body>
</html>