<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    $data = json_decode(file_get_contents("php://input"),true);
    include '../classes/vitamin.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['id'])){
            try{
                $vitamin = new Vitamin('../data/vitamins.json');
                $result = $vitamin->getOneVitamin($_GET['id']);
                echo json_encode($result);
                exit;
            }catch(Exception $error){
                echo json_encode($error);
            }
        }
        try{
            $vitamins = new Vitamin('../data/vitamins.json');
            $result = $vitamins->getAllVitamins();
            echo json_encode($result);
            exit;
        }catch(Exception $error){
            echo json_encode($error);
        }
    }
?>