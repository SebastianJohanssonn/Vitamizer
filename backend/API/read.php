<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    $_POST = json_decode(file_get_contents("php://input"),true);
    include '../classes/vitamin.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        try{
            $vitamins = new Vitamin('../data/vitamins.json');
            $result = $vitamins->getAllVitamins();
            echo json_encode($vitamins);
            exit;
        }catch(Exception $error){
            echo json_encode($error);
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $vitamin = new Vitamin('../data/vitamins.json');
            $result = $vitamin->getOneVitamin($_POST['id']);
            echo json_encode($vitamin);
            exit;
        }catch(Exception $error){
            echo json_encode($error);
        }
    }
?>