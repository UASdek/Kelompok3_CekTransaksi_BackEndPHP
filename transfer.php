<?php 
include("../includes/db_connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $from_account = $_POST["from_account"];
        $to_account = $_POST["to_account"];
        $amount = $_POST["amount"];

        // $user_send = conn->query("SELECT balance FROM accounts WHERE id+account = $from_account");

        // if(count($user_pengirim) < 1){
        //     throw new Exception("ID Account not Found");
        // }
        // if()
        $transaction_from = $conn->query("UPDATE accounts SET balance = balance - $amount WHERE id_account = $from_account");

        $transaction_to = $conn->query("UPDATE accounts SET balance = balance + $amount WHERE id_account = $to_account");

        if($transaction_from && $transaction_to){
            echo json_encode(["sucess"=>true, "message"=>"Transfer Sucessful"]);
        } else {
            echo json_encode(["error"=>true, "message"=>"Transfer Failed"]);
        }
    } catch (Exception $e){
        $response = [
            'error' => true,
            'message' => $e->getMessage()
        ];
        echo json_encode($response);
    }
}
?>