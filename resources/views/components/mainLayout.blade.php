<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


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


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    
    <!-- client side render -->
    <script defer src="{{ mix('js/app-client.js') }}"></script>

</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    


        <main>
            {{ $slot }}

            {{-- THIS SECTION WILL HAVE THE SEARCH PROBABLY USE ELASTIC SEARCH JUST TO TEST --}}

            {{-- HERE WILL ADD THE COMPONENT SHOWING THE JOB ADDS --}}

        </main>


        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="24"
                        height="19">
                    <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool
                                stuff</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random
                                feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team
                                feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for
                                developers</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                                one</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource
                                name</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                                resource</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final
                                resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    {!! ssr('js/app-server.js')->render() !!}

   
    {{-- bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</body>

</html>