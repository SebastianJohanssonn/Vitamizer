<?php
    include '../handlers/jsonHandler.php';

    class Vitamin{
        public $JSON;
        public $content;
        public function __construct($string){
            $this->JSON = new JSON();
            $this->content = $this->JSON->getContent($string);
        }
        function getAllVitamins(){
            return $this->content;
        }
        function getOneVitamin($id){
            foreach($this->content as $value){
                if($value['id'] == $id){
                    return $value;
                }
            }
        }
    }
?>