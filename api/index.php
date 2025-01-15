<?php

header('Content-Type: application/json; charset=utf-8');

$response = [
  "test" => true
];

echo json_encode($response);
