<?php
include 'config.php';

$sql = " SELECT * FROM users as A LEFT JOIN user2 as B on A.id = B.user_id LEFT JOIN user3 as C on B.u_id = C.urr_id";



$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Add each row to the data array
    }
    echo json_encode(['success' => true, 'data' => $data]);
} else {
    echo json_encode(['success' => false, 'message' => 'No data found']);
}

?>