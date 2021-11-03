<?php 

declare(strict_types=1);

require 'user_notes/Post.php';
require 'user_notes/PostLoader.php';



// session_start();
// if(isset($_POST["name"])) {
//     $Post = new post();
//     $_SESSION["Post"] = $post;

// }


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


    <h2>Guestbook</h2><br><br><br><br>

   
    <h2>User feedback</h2>
    <div class="name">
         <!-- php echo $blackjack->getDealer()->showcards();   ?> -->
        
    </div>

    
    <form method="post" id="communicate" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <textarea id="textarea" name="usertext" rows="4" cols="50">Comments please</textarea><br><br>
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