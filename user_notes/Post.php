<?php

class Post
{

    private $feedback = "feedback.json";
    private $title;
    private $date;
    private $content;
    private $author;
    private $userarray = [];

    public function __construct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->author = $_POST[htmlspecialchars("fname")];
            $this->title = $_POST[htmlspecialchars("lname")];
            $this->content = $_POST[htmlspecialchars("userText")];
        }
    }

    

    public function addAndCreatJson()
    {

        if (isset($_POST["submit"])) {

            $creatFile = fopen($this->feedback, 'a');
            $this->storeData();
            
        }
    }


    public function storeData()
    {

        $date = $this->date;
        // $date = date('l \t\h\e jS');
        $date = date('y-m-d h:i:s');
        $file = json_decode(file_get_contents("feedback.json"));

        $file[] = array("author" => $this->author, "lname" => $this->title, "userText" => $this->content, "date" => $date);
        $json = json_encode($file);
        
        file_put_contents($this->feedback, $json);


    }


    public function getAuthor()
    {
        return  $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getContent()
    {
        return  $this->content;
    }
    public function getDate()
    {
        return  $this->date;
    }
 
}
