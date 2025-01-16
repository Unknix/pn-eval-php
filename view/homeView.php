<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue!</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>

<body>
<div class="container vh-100 d-flex align-items-center">
<div class="row justify-content-center w-100">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Bienvenue</h2>
            </div>
            <div class="card-body">
                <form action="../controller/list.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Votre nom :</label>
                        <input type="text" class="form-control" id="username" name="username" required> 
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Entrer</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>