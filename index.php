<?php
header('Content-Type: application/json');

echo json_encode([
    ["u" => "admin", "p" => "pass1234"],
    ["u" => "gestor", "p" => "clave5678"]
]);
