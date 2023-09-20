<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Transaksi Terakhir</title>
        
    </head>
    <body>

    <form action="api/balance.php" method="GET">
        <h2>Check Balance</h2>
        <label for="balance-id" >Account ID:</label>
        <input type="text" id="balance-id" name="id" placeholder="Enter Account ID">
        <input type="submit" value="Check Balance">
    </form>

    <h1>Form Transfer Uang</h1>
       <form action="/api/transfer.php" method="POST">
        <label for="from-account">From Account ID:</label>
        <input type="text" id="from-account" name="from_account" placeholder="From Account ID">

        <label for="to-account">To Account ID:</label>
        <input type="text" id="to-account" name="to_account" placeholder="To Account ID">

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" placeholder="Amount">

        <input type="submit" value="Transfer">

       </form>
        
        <h2>Daftar Transaksi Terakhir</h2>
        <form action="/api/transactions" method="GET">
            <label for="from-account">ID Akun:</label>
            <input type="text" id="from-account" name="from-account" placeholder="From Account ID">

            <input type="submit" value="Dapatkan Transaksi Terakhir">
        </form>
    </body>
</html>