<?php
// Incluir el archivo de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Si usas Composer, de lo contrario ajusta la ruta

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Recoger los datos del formulario
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Instanciar el objeto PHPMailer
  $mail = new PHPMailer(true);

  try {
    // Configuración del servidor SMTP
    $mail->isSMTP(); // Habilitar el uso de SMTP
    $mail->Host = 'smtp.gmail.com'; // Dirección del servidor SMTP (como Gmail, Mailgun, etc.)
    $mail->SMTPAuth = true; // Habilitar la autenticación SMTP
    $mail->Username = 'geoauron7@gmail.com'; // Tu correo electrónico
    $mail->Password = 'bxgt uceb bfis xjqa'; // Tu contraseña (si usas un servicio como Gmail, puedes usar una contraseña de aplicación)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encriptación de la conexión
    $mail->Port = 587; // Puerto SMTP (587 es para TLS, 465 para SSL)

    // Remitente y destinatario
    $mail->setFrom($email, $name); // Correo del usuario y nombre
    $mail->addAddress('lechompa@gmail.com', 'Admin Padron Nominal'); // Correo de destino

    // Asunto del correo
    $mail->Subject = "Nuevo mensaje desde el formulario de contacto: $subject";

    // Cuerpo del mensaje
    $mail->isHTML(true); // Si quieres enviar el mensaje en formato HTML
    $mail->Body    = "Has recibido un nuevo mensaje desde el formulario de contacto de tu página web.<br><br>";
    $mail->Body   .= "<strong>Nombre:</strong> $name<br>";
    $mail->Body   .= "<strong>Correo:</strong> $email<br><br>";
    $mail->Body   .= "<strong>Mensaje:</strong><br>$message";

    // Enviar el correo
    if ($mail->send()) {
      echo 'Correo enviado correcto';  // Si el mensaje se envió correctamente
    } else {
      echo 'error';  // Si ocurrió un error
    }
  } catch (Exception $e) {
    // Si ocurre un error con PHPMailer
    echo "Error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
  }
  exit();
}
