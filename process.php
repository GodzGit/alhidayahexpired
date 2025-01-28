<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Kirim email atau lakukan tindakan lain sesuai kebutuhan
    // Contoh sederhana untuk mengirim email menggunakan fungsi mail():
    $to = "bagusharyop098@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Setelah mengirim email, Anda dapat mengarahkan pengguna kembali ke halaman formulir atau halaman lain.
    header("Location: contact.html");
} else {
    // Jika formulir tidak disubmit, lakukan sesuatu (opsional)
    echo "Form not submitted.";
}
?>
