<?php
require_once 'functions.php';

if (isset($_GET['length'])) {
    $password_length = $_GET['length'];
    $password = generate_password($password_length);
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
            <form method="GET" action="index.php" class="d-flex justify-content-center">
                <label for="length" class="px-3">Lunghezza della password:</label>
                <input type="number" id="length" name="length" min="1" max="100">
                <input type="submit" value="Genera Password">
            </form>

            <?php if (isset($password)) : ?>
                <p class="d-flex justify-content-center pt-3">La tua password generata è: <?php echo $password; ?></p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>