<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

// Incluye las funciones necesarias
require_once 'functions.php';

// Obtiene la solicitud HTTP
$method = $_SERVER['REQUEST_METHOD'];

// Procesa la solicitud
switch ($method) {
    case 'GET':
        // Manejar solicitudes GET
        handleGetRequest();
        break;

    case 'POST':
        // Manejar solicitudes POST
        // var_dump($_POST);
        handlePostRequest();
        break;

    default:
        // Método no permitido
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
}