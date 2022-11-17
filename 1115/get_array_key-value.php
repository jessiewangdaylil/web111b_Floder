<?php
$members =["John"=>"20","Marry"=>"18","Tonny"=>"30"];
$m_value=implode(",",$members);
echo "$m_value <br>";
$m_key=implode(",",array_keys($members));
echo "$m_key <br>";
?>