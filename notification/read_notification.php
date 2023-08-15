<?php
include 'db.php';

try {

    $uid = '1'; /* Your customer ID value here */;
$status = 'VIEWED';

    $stmt = $conn->prepare("SELECT * FROM main_notifications
     WHERE uid = :uid, status = :status");
    $stmt->bindParam(':uid', $uid);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

 $json = json_encode($rows);

    if (empty($rows)) {
        //echo "NOT FOUND";

        $err = [
"status"=>"400",
"description"=>"Data not found"
        ];

echo $err; json_encode($err);

    } else {
   //     echo "Found";
        echo $json;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
