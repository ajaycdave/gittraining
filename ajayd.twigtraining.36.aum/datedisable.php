
<?php

 /*$toDate=array("31-3-2020","5-4-2020","8-4-2020","11-4-2020","14-4-2020","15-4-2020","16-4-2020",
                            "20-4-2020","21-4-2020","3-5-2020","4-5-2020","6-5-2020","7-5-2020","9-5-2020");*/
 
header("Content-Type: application/json"); 
$toDate=array("31-3-2020","5-4-2020","8-4-2020","11-4-2020","14-4-2020","15-4-2020","16-4-2020","20-4-2020","21-4-2020","3-5-2020","4-5-2020","6-5-2020","7-5-2020","9-5-2020");

 echo json_encode($toDate);die;

 

?>