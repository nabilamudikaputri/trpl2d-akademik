<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Akademik</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link <?= !isset($_GET['page']) ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= (isset($_GET['page']) && $_GET['page'] == 'mahasiswa') ? 'active' : '' ?>" href="index.php?page=mahasiswa">Data Mahasiswa</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN -->
    <div class="container my-4">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        if ($page == 'home') include 'home.php';
        if ($page == 'mahasiswa') include 'list.php';
        if ($page == 'create') include 'create.php';
        if ($page == 'edit') include 'edit.php';
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
