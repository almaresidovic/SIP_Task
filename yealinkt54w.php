<?php

$configParamteres = array(
    "account1Label"=>"Alma", 
    "account1DisplayName"=>"Test", 
    "account1UserName"=>"alma",
    "account1Password"=>"123456",
    "account1SipServer1Address"=>"10.5.5.5",
    "account1SipServer1Port"=>"5060"
);

foreach($configParamteres as $paramKey => $paramValue) {
    echo $paramKey . ": " . $paramValue;
    echo "<br>";
}

?>