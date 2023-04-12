<?php
    // the request method must be delete
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        // get param from route
        $url = $_GET['image'];
        $data = file_get_contents('user_data.txt');
        $records = explode("\n", $data);
        $updated_records = '';
        // iterate through each image in file and check if image exist
        foreach ($records as $record) {   
            if (strpos($record, $url) !== false) {
                $file_path = explode('|', $record)[0];
                unlink($file_path);
            } else {
                $updated_records .= $record . "\n";
            }
        }

        file_put_contents('user_data.txt', $updated_records);
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Image deleted successfully']);
    }
?>
