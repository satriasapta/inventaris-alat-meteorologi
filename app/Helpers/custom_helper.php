<?php 
function userLogin(){
$db = \Config\Database::connect();
return $db->table('tb_user')->where('id', session('id'))->get()->getRowArray();
} 
?>