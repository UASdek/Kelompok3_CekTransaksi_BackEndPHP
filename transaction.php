<?php 
include("../includes/db_connect.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    try{
        $id = $_GET["id_account"];
        $result = $conn->query("SELECT * FROM transactions WHERE id_account = $id");

        if(empty($result)){
            throw new Exception("ID Account Not Found");
        }
        echo json_encode($result);
    } catch (Exception $e){
        $response = [
            'error' => true,
            'message' => $e->getMessage()
        ];
        echo json_encode($response);
    }
}
?>