<?php
$password_length = $_GET['length'];
$password = generate_password($password_length);
function generate_password($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}
?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>

<body>
    <section class="bg-success d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container bg-light py-4">
            <form method="GET" action="index.php">
                <label for="length">Lunghezza della password:</label>
                <input type="number" id="length" name="length" min="1" max="100">
                <input type="submit" value="Genera Password">
            </form>

            <?php if (isset($password)) : ?>
                <p>La tua password generata è: <?php echo $password; ?></p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>