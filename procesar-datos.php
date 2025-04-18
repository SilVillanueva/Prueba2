<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['user'] ?? '';
    $contrasena = $_POST['password'] ?? '';
    
    if (!empty($usuario) && !empty($contrasena)) {
        echo json_encode(['status' => 'ok', 'mensaje' => 'Datos recibidos correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'mensaje' => 'Faltan datos']);
    }
} else {
    echo json_encode(['status' => 'error', 'mensaje' => 'Método no permitido']);
}
?>