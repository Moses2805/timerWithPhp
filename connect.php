<?php
try{
$db = new PDO("mysql:host=localhost;dbname=timerdb", "root", "");
$db->query("SET CHARSET SET utf8");
}
catch(PDOException $e){
    echo $e -> getMessage();
}

$sorgu = $db->query("select timerForCD from timer where timerID='1'")->fetch(PDO::FETCH_ASSOC);
$vaxt = $sorgu['timerForCD'];

?>

<script> 
    let myTime = <?php echo json_encode($vaxt) ?>
</script>