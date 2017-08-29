<?php

require_once 'client.php';

class GetEmail
{
    public function getUserEmail($access,$refresh,$tokentype,$expiresin){
         return getEmail($access,$refresh,$tokentype,$expiresin);

    }

}

$data = file_get_contents("php://input");
$parsedData = json_decode($data);
$access=$parsedData->access;
$refresh=$parsedData->refresh;
$tokentype=$parsedData->tokentype;
$expiresin=$parsedData->expiresin;
$uid=$parsedData->uid;

$content = array();


$obj = new GetEmail();

$response=$obj->getUserEmail($access,$refresh,$tokentype,$expiresin);

// $content['GSyncRt__UserEmail__c'] == $response;

// $url = $this->instance_url . "/services/data/v20.0/sobjects/GSyncRt__GSync_User__c/$id";
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_HTTPHEADER,
//         array("Authorization: Bearer " . $this->access_token,
//             "Content-type: application/json"));
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
// curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
// curl_setopt($curl, CURLOPT_SSLVERSION, 6);
// curl_exec($curl); 
// curl_close($curl);




//$arr = array();
//$arr['useremailsf'] = $response;
//$arrencoded = json_encode($arr); // {"a":1,"b":2,"c":3,"d":4,"e":5}

error_log($parsedData);
error_log($id);
return $response;


?>