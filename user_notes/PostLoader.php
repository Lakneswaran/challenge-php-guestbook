<?php





class PostLoader
{
    private $feedback = "feedback.json";
    private $Title;
    private $Date;
    private $Content;
    private $Author;
    private $userarray = [];

    public function __construct()
    {
    }

    public function addAndCreatJson()
    {

        if (isset($_POST["submit"])) {

            $creatfile = fopen($this->feedback, 'w');
            $this->storeData();
            echo $this->Author;
        }
    }


    public function storeData()
    {

        $date = $this->Date;
        $date = date('l \t\h\e jS');
        $data = json_decode(file_get_contents($this->feedback));
        $data[] = array("author" => $_POST["fname"], "lname" => $_POST["lname"], "usertext" => $_POST["usertext"], "date" => $date);
        $json = json_encode($data);
        file_put_contents($this->feedback, $json);
        // var_dump(json_encode($data));
        $this->getDataFromJson();
        
    }



    public function getDataFromJson()
    {

        $getData = file_get_contents($this->feedback);
        $json = json_decode($getData);
        var_dump($json);
        // var_dump($getData->author);
        // $this->pasteTheDataInBrowser();
       echo $json[0]->author. "<br>";
       echo $json[0]->lname. "<br>";
       echo $json[0]->usertext. "<br>";
       echo $json[0]->date. "<br>";
    }

    // public function pasteTheDataInBrowser()
    // {
    //     foreach ($this->getData as $getData_num => $data) {
    //         echo "Line #<b>{$getData_num}</b> : " . htmlspecialchars($data) . "<br />\n";
    //     }
    // }
}
