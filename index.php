<?php

declare(strict_types=1);

require 'user_notes/Post.php';
require 'user_notes/PostLoader.php';


$post = new Post();
$post->addAndCreatJson();
$loader = new PostLoader();

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


    
    <div class="leftpage">
    <h2>User feedback</h2>
     
    <form method="post" id="communicate" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

    <label for="fname">Title:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Author:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <textarea id="textarea" name="userText" rows="4" cols="30">Comments please</textarea><br><br>
    <button type="submit" name="submit">Send</button>

    </form>

    </div>




    <?php
    $loader->showPost();
    ?>
    </divW>

</body>

</html>
<style>
    .displaycard {
        font-size: 250px;

    }

    body {
        background-image: url('Page.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 1200px;
        background-position: center;


    }

    .leftpage{
        position: absolute;
        top: 310px;
        padding-left: 510px;

        position: sticky;
    }
    .result {
        border: 1px solid RED;
        background-color: aqua;
        width: 300px;
        height: 300px;
        padding: 20px;
    }

    
</style>