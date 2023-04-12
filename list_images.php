<?php
    // get all images from file 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $data = file_get_contents('user_data.txt');
        $records = explode("\n", $data);
        $results = array();

        foreach ($records as $record) {
            $fields = explode('|', $record);
            if (count($fields) == 2) {
                $results["images"][] = array(
                    'image' => $fields[0],
                    'text' => $fields[1]
                );
            }
        }

        header('Content-Type: application/json');
        echo json_encode($results);
    }
?>
