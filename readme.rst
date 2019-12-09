###################
CodeIgniter for Front-End Development
###################

1. Backend End Point -> application/helper-->host
2. Post Request -> sendCurl(host()."/end_point_param",$data=null,$method="post",$header=$headers);
3. Get Request -> sendCurl(host()."/end_point_param",$data=null,$method="get",$header=$headers);
4. Base Url -> application/config/config.php
5. Run php -S your_base_url
6. Folder assets in root folder

##################
For Headers if necessary
##################

$headers = array();
$headers[] = "Accept: application/json";
$headers[] = "Authorization: Bearer ".$token;
