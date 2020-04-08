<?php
    
    class JSON{
        public $content;

        public function getContent($fileName){
            try{
                if(file_exists($fileName)){
                    $this->content = json_decode(file_get_contents($fileName), true);
                }else{
                    $this->jsonContent = "";
                    $this->content = "No such file";
                }
                return $this->content;

            }catch(Exception $error){
                return $error->getMessage();
            }
        }
        
    }
?>