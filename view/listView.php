<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>

</head>

<body>
    <header class="bg-dark text-white py-4 mb-4">
        <div class="container">
            <h1 class="text-center">Bienvenue <?php echo htmlspecialchars($_SESSION['username']); ?> !</h1>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-12">
                    <div class="event-card">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['lieu']); ?>">
                        <div class="event-details">
                            <p><strong>Lieu :</strong> <?php echo htmlspecialchars($event['lieu']); ?></p>
                            <p><strong>Difficulté :</strong> <?php echo htmlspecialchars($event['difficulte']); ?></p>
                            <p><strong>Description :</strong> <?php echo htmlspecialchars($event['description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>