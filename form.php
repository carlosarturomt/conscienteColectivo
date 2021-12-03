<?php
// D A T E - S E R V I C E
if (isset($_POST['btn-submit'])) {
    function añadir_algo(&$cadena)
    {
        $cadena .= test_input($_POST['destino1']);
    }

    $cad = 'carlosarturomt@gmail.com, ';
    añadir_algo($cad);
    echo $cad;

    $asunto = "Agendar Cita de CoscienteColectivo Web";

    $profesionista = test_input($_POST['profesionista']);

    $mensaje = test_input($_POST['mensaje']);
    $numero = test_input($_POST['numero']);
    $nombre = test_input($_POST['nombre']);
    $correo = test_input($_POST['correo']);

    $destino1 = test_input($_POST['destino1']);

    $header = 'From: profesionistasmexico@gmail.com' . "\r\n" .
        'Reply-To: noreply' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $carta = "Para: $profesionista \n";
    $carta .= "Mensaje: $mensaje \n";
    $carta .= "Tel. de contacto: $numero \n";
    $carta .= "Nombre del contacto: $nombre \n";
    $carta .= "Correo de contacto: $correo \n";

    $mail1 = mail($cad, $asunto, $carta, $header);

    if ($mail1) {

        echo "<html>
        <head>
          <title>Send</title>
        </head>
        <body>
        <style>
            body {
                background-color: black;  
            }
            main {
                width: 90%;
                height: 90vh;
                margin: 5%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            p {
                color: white;
                text-align: center;
                font-size: 4rem;
            }
        </style>
        <main>
          <p>Se ha enviado tu información con éxito, me comunicaré contigo lo más pronto posible.<br> 
          👌</p>
        </main>
        </body>
        </html>";

        echo "<meta http-equiv='refresh' content='3,url=/index'>";
    } else {
        echo "<html>
        <head>
          <title>Error</title>
        </head>
        <body>
        <style>
            body {
                background-color: black;  
            }
            main {
                width: 90%;
                height: 90vh;
                margin: 5%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            p {
                color: white;
                text-align: center;
                font-size: 4rem;
            }
        </style>
        <main>
          <p>No se ha podido enviar tu mensaje, intentalo mas tarde. <br> :(</p>
        </main>
        </body>
        </html>";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>