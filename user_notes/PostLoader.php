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

    public function addAndCreatJson(){

       if(isset($_POST["submit"])) {
    
        $creatfile = fopen($this->feedback, 'w');
        $this->storeData();
        echo $this->Author;
        
        

       }

    }

    public function storeData(){
       
            $data = json_decode(file_get_contents($this->feedback));
               $data[]= array("author" => $_POST["fname"], "lname" => $this->Title, "usertext" => $this->Content, "data" => $this->Date);
               $json = json_encode($data);
               file_put_contents($this->feedback, $json);
               var_dump(json_encode($data));
    }

    

    public function storeDataInJson(){
    
        

        // var_dump(json_encode($this->userarray));
        // // $file = json_encode($this->userarray);
        // // file_put_contents($this->feedback,$file);
        

    }


    
}




