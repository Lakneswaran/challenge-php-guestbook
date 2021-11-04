<?php





class PostLoader
{
    private $feedback = 'feedback.json';
        public function showPost(){
            if(file_exists($this->feedback)) {
               $current  = file_get_contents($this->feedback);
               $data = json_decode($current);

            if(!empty($data))   {
               $reserve = array_reverse($data);
               $slicearray = array_slice($reserve, 0, 20);
                
               foreach($slicearray as $key=>$info){
                   ?>
                   <div class='result'>
                       <?php echo $key +1 . ' '?>
                       <label><strong>Title </strong><span><?php echo $info->author ?></span></label>
                       <label><strong>Author </strong><span><?php echo $info->lname ?></span></label>
                       <label><strong>Content </strong><span><?php echo $info->userText ?></span></label>
                       <label><strong>Date:</strong><span><?php echo $info->date ?></span></label>          
                   </div>
                   <br>
                 <?php     
               }

             }
            }
        }    
}