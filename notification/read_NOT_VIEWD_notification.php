<?php
include 'db.php';

try {
    $uid = '1'; /* Your customer ID value here */
    $status = 'NOT_VIEWED';

    $stmt = $conn->prepare("SELECT * FROM main_notifications WHERE uid = :uid AND status = :status");
    $stmt->bindParam(':uid', $uid);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($rows);

    if (empty($rows)) {
        $err = [
            "status" => "400",

            "numbe_of_notification" => 0,
            "description" => "Data not found"
        ];

        echo json_encode($err);
    } else {
        $numberOfNotifications = count($rows); // Calculate the number of notifications

        $response = [
            "status" => "200",
            "numbe_of_notification" => $numberOfNotifications,
            "notifications" => $rows,
        ];

        echo json_encode($response);

        // Update the status to 'VIEWED' for the retrieved data
        $updateStmt = $conn->prepare("UPDATE main_notifications SET status = 'VIEWED' WHERE uid = :uid AND status = 'NOT_VIEWED'");
        $updateStmt->bindParam(':uid', $uid);
        $updateStmt->execute();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
