<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#nature">Nature</a></li>
                            <li><a class="dropdown-item" href="#architecture">Architecture</a></li>
                            <li><a class="dropdown-item" href="#travel">Travel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="#contactus">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Architecture4.jpg" class="d-block w-100" alt="Architecture">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/nature4.jpg" class="d-block w-100" alt="Nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nature</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Travel4.jpg" class="d-block w-100" alt="Travel">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Travel</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a id="nature">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Nature</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="architecture">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Architecture</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Architecture1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Architecture2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Architecture3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="travel">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Travel</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Travel1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Travel2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/Travel3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="contactus">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Number:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    </a>

    <a id="about">
    <section class="my-5">
        <div class="py-4">
            <h2 class="text-center mb-4">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center g-3"> <!-- g-3 reduces gutter space -->

                <div class="col-md-6 text-center">
                    <img src="images/about.jpg" alt="About Us"
                        class="img-fluid mx-auto d-block"
                        style="max-width: 250px; border-radius: 20px;">
                </div>

                <div class="col-md-6">
                    <p class="lead mb-2">
                        Welcome to our Photo Gallery! We are passionate about capturing the beauty of the world through images — from stunning landscapes and architectural marvels to travel moments and artistic visuals.
                    </p>
                    <p class="mb-1">
                        Whether you're a photography lover or just someone who enjoys beautiful visuals, our platform offers something special for you. Explore, admire, and feel free to share your thoughts with us.
                    </p>
                </div>

            </div>
        </div>
    </section>
    </a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>