<?php
    class Article{

        //properties
        private $id;
        private $title;
        private $summary;
        private $content;

        //methods
        public function __construct($id, $title, $summary, $content){
            $this->id = $id;
            $this->title = $title;
            $this->summary = $summary;
            $this->content = $content;
        }

        //Getters/Setters

        public function  getId(){
            return $this->id;
        }
        public function  getTitle(){
            return $this->title;
        }
        public function  getSummary(){
            return $this->summary;
        }
        public function  getContent(){
            return $this->content;
        }

        public function  setTitle($title){
            return $this->title = $title;
        }
    }

?>