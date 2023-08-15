<?php
include 'db.php';
// Attempt insert query execution
try{
    // Prepare an insert statement
    $sql = "INSERT INTO main_notifications (text, uid) VALUES (:text, :uid)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':text', $text, PDO::PARAM_STR);
    $stmt->bindParam(':uid', $uid, PDO::PARAM_STR);
    //$stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    $text = "Sample notification";
    $uid = "1";
    $stmt->execute();
    
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>
