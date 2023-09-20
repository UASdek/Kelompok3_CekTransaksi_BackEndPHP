<?php 
include("../includes/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    try{
        if(empty($_GET)){
            $user = $conn->query("SELECT * FROM accounts");
            echo json_encode($user);
        } else {
            $id = $_GET["id_account"];
            $user = $conn->query("SELECT * FROM accounts WHERE id_account = $id");

            if(empty($user)){
                throw new Exception("ID Account Not Found");
            }
            echo json_encode($user);
        }
    } catch(Exception $e){
        $response = [
            'error' => true,
            'message' => $e->getMessage()
        ];
        echo json_encode($response);

    }
}
?>