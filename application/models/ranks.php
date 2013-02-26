<?php
   
class Ranks extends CI_Model
{
    public function Parse($aid)
    {
        $query = "SELECT * FROM `users` WHERE `id`=`$aid` LIMIT 1;";
        
        $fetch = $mysql->query($query);
    }
}

?>
