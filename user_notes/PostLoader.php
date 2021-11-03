<?php

class PostLoader extends Post
{
    

    public function stand($deck){
        $score = parent::getScore();
        if($score<15){
            do{
                parent::hit($deck);
                $score = parent::getScore();
            }while($score<15);
            
        }

    }
}

?>
