<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel-Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customer">Customer</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="text-center text-primary">Laravel-Test Blade Pages</h1>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Laravel!</h1>
            <p class="lead">This is a simple welcome page built with Bootstrap and Blade template engine in Laravel 8.
            </p>
            <hr class="my-4">
            <p>Learn more about Laravel by visiting their official website.</p>
            <a class="btn btn-primary btn-lg" href="https://laravel.com" role="button">Learn more</a>
        </div>
    </div>
    <div class="container container-fluid mt-5">
        <h3>Introduction</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ducimus fuga voluptas ex, soluta est nesciunt!
            Earum odit atque ducimus nam reprehenderit harum officiis illo aspernatur distinctio, perferendis est magni
            voluptatibus, ipsum quidem, eum minima officia sint cupiditate commodi itaque voluptas dolore? Non dolorum
            aliquam necessitatibus aperiam eius eaque. Obcaecati illo architecto odit ipsa aliquam dignissimos
            voluptatem labore est in aut! Itaque voluptatum, et tempora qui eveniet voluptate ea sit ipsum nam, optio
            officia vel similique. Molestiae libero rerum consectetur. Cupiditate, error ut molestiae molestias
            aspernatur facilis nemo excepturi quidem iure ab ipsam ad vitae, debitis minima repellendus. Sunt natus
            minus et iure, laudantium rerum aliquid nostrum quam fugit nobis odio deleniti quas. Tenetur natus ut vero,
            tempora, soluta rem voluptatem ratione in molestiae nihil alias, excepturi quis quo facilis iusto nemo quas
            facere libero suscipit assumenda quisquam molestias commodi. Nostrum provident reiciendis facilis totam
            laudantium obcaecati! Possimus, quia porro! Mollitia totam officia facilis necessitatibus ex exercitationem.
            Illo magni aliquam odio officia ea aperiam porro aut, iste neque incidunt, architecto fuga! Expedita modi
            inventore ea odio veritatis error, sed quibusdam doloribus suscipit culpa rem cumque consequuntur cum quidem
            nam totam, sint minima ipsam a quaerat architecto libero possimus! Ea, vitae.</p>
    </div>
    <div class="container-md mt-5 justify-content-center">
        <div class="row justify-content-center d-flex flex-wrap p-3 md-3 gx-5">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://loremflickr.com/320/240" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>