<?php
    require_once APP_ROOT.'/app/models/Patient.php';
    class PatientService{
        public function getAllPatients(){
            //Buoc 1: ket noi Database
            try{
                $conn = new PDO("mysql:host=localhost;dbname=demo","root","");

                //Buoc 2: truy van du lieu
                $sql = "SELECT * FROM patients ORDER BY id ASC";
                $stmt = $conn->query($sql);

                //Buoc 3: xu ly ket qua tra ve
                $patients = [];
                while($row = $stmt->fetch()){
                    $patient = new Patient($row['id'],$row['fullname'],$row['gender'],$row['birth'],$row['address'],$row['phone']);
                    $patients[] = $patient;
                }
                return $patients;
            }
            catch (PDOException $e){
                // $conn = null;
                // echo $e->getMessage();
                return $patients = [];
            }

        }
    }

?>