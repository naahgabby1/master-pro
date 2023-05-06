<?php

include('DbController.php');

class crudOperation extends DbConnection {

public function insert($db,$fields){
$tbl_columns = implode(',',array_keys($fields));
$data = implode(', :',array_keys($fields));
$sql = 'INSERT INTO `'.$db.'` ('.$tbl_columns.')VALUES(:'.$data.')';
$stm = $this->conn()->prepare($sql);
foreach ($fields as $key => $val) {
$stm->bindValue(':'.$key,$val);
}
$ex = $stm->execute();
if ($ex) {
$stm2 = $this->conn()->prepare("SELECT LAST_INSERT_ID()");
$stm2->execute();
$lastid = $stm2->fetchColumn();
return $lastid;
}
}


	

//search
public function searchTransCode($val){
$data = array();
$sql = "SELECT * FROM `printed_summaries` WHERE `transaction_code` LIKE '%".$val."%' AND `void_status`<1";
$xconx = $this->conx();
$results = mysqli_query($xconx, $sql);
$count = mysqli_num_rows ($results);
if ($count > 0) {
while ($r = mysqli_fetch_assoc($results)) {
$data[] = $r;
}
return $data;
}
}


















// updates
public function update($db, $colm, $con) {
$data = array();
$sql = 'UPDATE `' . $db . '` SET ' . $colm . ' WHERE ' . $con . '';
$xconx = $this->conx();
$results = mysqli_query($xconx, $sql);
$count = mysqli_affected_rows ($xconx);
if ($count>0) {
return 'success';
}
}


//Deletes
public function deletes($db, $con) {
$data = array();
$sql = 'DELETE FROM `' . $db . '` WHERE ' . $con . '';
$xconx = $this->conx();
$results = mysqli_query($xconx, $sql);
$count = mysqli_affected_rows ($xconx);
if ($count>0) {
return 'success';
}
}



} ?>