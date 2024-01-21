<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6pBkVR2hxFbFfC9bS/hRTt8+pR6L4N2M" crossorigin="anonymous">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Wiki Site</a>
    </nav>

    <!-- Wiki Details Content -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if (!empty($wikiDetails)): ?>
                    <div class="card">
                        <img src="<?= URL_DIR ?>public/assets/images/bkog.png" alt="Wiki Image" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title"><?= $wikiDetails['titre'] ?></h2>
                            <p class="card-subtitle"><?= $wikiDetails['nom'] ?></p>
                            <p class="card-text"><?= $wikiDetails['contenu'] ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <p>No details available for this wiki.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpu"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-pzjw8W+ua/cU+JXebqHbfGJAJswIcFtQZxZ5n5epHq5u9LdGc3F0/LF4FOgY5Gpi"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6pBkVR2hxFbFfC9bS/hRTt8+pR6L4N2M"
        crossorigin="anonymous"></script>

</body>

</html>
