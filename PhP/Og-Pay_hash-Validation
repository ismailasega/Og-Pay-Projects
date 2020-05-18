<?php
function is_valid_hash($master_IV,$isysid,$payment_status,$received_hash)
{
		$dataToComputeHash = $master_IV . "isysid=" . $isysid . "&result=" . $payment_status . $master_IV;
		$computedHash = strtoupper(hash_hmac("sha256", $dataToComputeHash, "xxxxxxxxxx"));
		return $computedHash===$received_hash;

}
$master_IV="xxxxxxxxxxxx";
$isysid="303919249139";
$payment_status="FAIL";
$received_hash="13F0FDE89094A3BA3D73148AAFA39294507F09D2B8FFD7AD63F2389A6BB57408";

var_dump(is_valid_hash($master_IV,$isysid,$payment_status,$received_hash));
