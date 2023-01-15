<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>My blog</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MY BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>posts">Posts</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php if (isset($_SESSION['is_logged_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class=" container">
        <div class=" row">
            <?php require($view); ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>