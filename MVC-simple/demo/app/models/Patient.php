<?php

    class Patient {
        //Properties
        private $id;
        private $fullname;
        private $gender;
        private $birth;
        private $address;
        private $phone;

        //Methods
        public function __construct($id, $fullname, $gender, $birth, $address, $phone){
            $this->id = $id;
            $this->fullname = $fullname;
            $this->gender = $gender;
            $this->birth = $birth;
            $this->address = $address;
            $this->phone = $phone;
        }

        //Get,Set
        public function getId(){
            return $this->id;
        }
        public function getFullname(){
            return $this->fullname;
        }
        public function getGender(){
            return $this->gender;
        }
        public function getBirth(){
            return $this->birth;
        }
        public function getAddress(){
            return $this->address;
        }
        public function getPhone(){
            return $this->phone;
        }

        public function setFullname($fullname){
            $this->fullname = $fullname;
        }
    }

?>