<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Weekend Job</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- full Satellite theme -job search -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.4.5/themes/satellite-min.css" integrity="sha256-TehzF/2QvNKhGQrrNpoOb2Ck4iGZ1J/DI4pkd2oUsBc=" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>

    <div class="container py-3">

        <header class="sticky-top" style="background-color: white">
            <div class="
                    d-flex
                    flex-column flex-md-row
                    align-items-center
                    pb-3
                    mb-2
                    border-bottom
                ">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="/img/earth.svg" alt="logo" style="height: 6vh" class="m-2" />
                    <span class="fs-2" style="font-weight: bold;">RWJ</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

                    <div class="mx-3">
                        <a href="/searchJob">
                            <button class="btn btn-primary btn-lg btn-block">
                                Search Jobs on Weekends
                                <span>🔎</span>
                            </button>
                        </a>
                    </div>

                    <div class="mx-3">
                        <a href="/postJob">
                            <button class="btn btn-success btn-lg btn-block">
                                Post a Job
                                <span>🤖</span>
                            </button>
                        </a>
                    </div>
                </nav>
            </div>
        </header>

        <div class="alert-messages"></div>

        {{ $slot }}

    </div>



     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>