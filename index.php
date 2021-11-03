<?php 

declare(strict_types=1);

require 'card/Post.php';
require 'card/PostLoader.php';



session_start();
if(isset($_POST["name"])) {
    $Post = new post();
    $_SESSION["Post"] = $post;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Guestbook</title>
</head>
<body>
    <h2></h2>
    <div class="name">
         <!-- <?php echo $blackjack->getDealer()->showcards();   ?> -->
        
    </div>

    <h2></h2>
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div id="communicate">
        <button type="submit" name="name" >Send</button>
 

    </form>


</body>
</html>
<style>
    .displaycard{
        font-size: 250px;

    }
    body{
        text-align: center;
    }
</style>