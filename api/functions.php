<?php

require("./mail.php");

function validate($name, $email, $subject, $message){

    return (!empty($name) && !empty($email) && !empty($subject) && !empty($message)); 

}

// Función para manejar solicitudes GET
function handleGetRequest() {
    // Lógica para operaciones de lectura (GET)
    // Ejemplo: Devolver una lista de elementos
    $data = ['item1', 'item2', 'item3'];
    echo json_encode($data);
}

// Función para manejar solicitudes POST
function handlePostRequest() {
    $status = "";
    // Lógica para operaciones de escritura (POST)
    // Ejemplo: Recibir datos del cuerpo de la solicitud
    if ( validate(...$_POST) ){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $body = $message;

        // Mandar correo

        sendMail($subject, $body, $email, $name, true);
        

        $status = "success";


    }else{

        $status = "danger";

    }

    // Ejemplo de respuesta
    $response = ['message' => $status];
    echo json_encode($response);
}