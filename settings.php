<?php

$server_url = "<https://123.45.987>/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "<database_username>";
$db_pass = "<database_password>";
$db_name = "<database_name>";

$rpc_host = "127.0.0.1";
$rpc_port = "<RPC_port>";
$rpc_user = "<wallet_RPC_username>";
$rpc_pass = "<wallet_RPC_password>";

$fullname = "BOXYCoin"; //Website Title (Do Not include 'wallet')
$short = "BOXY"; //Coin Short (BTC)
$blockchain_tx_url = "https://boxy.blockxplorer.info/tx/"; //Blockchain Url
$support = "admin@boxycoin.live"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "<BOXY Coin Address>"; //Donation Address

$reserve = "0.0000060"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

?>
