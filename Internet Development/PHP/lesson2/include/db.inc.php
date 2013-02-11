<?php

//echo "DB FILE<br><br>";

$link_id=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
IF($link_id) {
    echo "Successful Connection";
}  else {
    echo "Unsuccessful Connection: " . DB_HOST;
    EXIT;
}

//if(mysql_select_db(DB_DATABASE,Slink_id)) {
//    //echo "
//}

?>