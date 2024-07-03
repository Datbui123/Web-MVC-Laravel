<?php
require_once APP_ROOT.('/app/services/PatientService.php');
class HomeController{
    public function index(){
        //Goi du lieu tu PatientService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        //render du lieu ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}