<?php
// update.php
// Přijímá JSON z Python skriptu a ukládá do sheep.json

header("Content-Type: application/json; charset=utf-8");

// Soubor, kam se ukládají data
$file = __DIR__ . "/sheep.json";

// Načti příchozí JSON
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if ($data && isset($data["count"])) {
    // Ulož do souboru sheep.json
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(["status" => "OK", "saved" => $data]);
} else {
    echo json_encode(["status" => "ERROR", "message" => "Neplatná data"]);
}
?>
