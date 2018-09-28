<?php 
$secret="usjfshfhsjffsjdffufnwefhuddh";
$address="1FvKeoUXAxHdmqTtsSCH9YXBVrZJfuhhNZ";
$invioce="101";
$callBackUrl="http://localhost/bitmo/callback.php?invioce=".$invioce."&secret=".$secret;
$blockChainApi=json_decode(file_get_contents("https://blockchain.info/api/recieve?method=create&address=".$address."&callback=".urlencode($callBackUrl)),true);
echo "send payments to".$blockChainApi["input_address"];
?>