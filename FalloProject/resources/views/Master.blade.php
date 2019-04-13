<html>
<head>
    <!-- Specify the title -->
    <title>
        @yield('title')
    </title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    @yield('header-content')

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Master.css">

    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>

</head>


<body>

        <!-- NavBar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

            <div class="navbar-brand">
                <a class="navbar-brand" href="/">
                    <img src="img/FalloSolo.png" width="30" height="30" class="d-inline-block align-top">
                    Fallo
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/">Nos meilleurs articles <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>


            <!-- try to have the path of the page
                  Les deux boutton pour s'inscrire et se connecter
                  ne seront pas visible si l'utilisateur
                  est au niveau de la page de connexion
            -->



            @if( !request()->is('connexion') )


                <div class="my-2 my-lg-0">
                    <div class="navbar-brand">
                        <div class="buttons">

                            @auth
                                <a class="" href="/mon-compte">
                                    Mon Compte
                                </a>
                                <a class="btn btn-danger" href="/deconnexion">
                                    Déconnexion
                                </a>

                            @else
                                <a class="btn btn-outline-success" href="/inscription">
                                    <strong>S'inscire</strong>
                                </a>
                                <a class="btn btn-outline-secondary" href="/connexion">
                                    Se connecter
                                </a>
                            @endauth

                        </div>
                    </div>
                </div>
            @endif
        </nav>

        <div class="container-fluid text-center" style=" position: relative ; top: 100px ;">
          <div class="row content">
              <div class="col-sm-1 sidenav"></div>
              <div class="card col-sm-1 sidenav">
                <!-- User Menu -->
                @if( auth()->check())

                    <article class="card"
                             style=" position: fixed ;
                                                left: 10% ;
                                                width: 15% ;
                                                top: 5% ;
                                                ">

                        <center>
                            <figure class="image is-128x128" style=" position: relative ">
                                <img src="img/profile-icon-def.png"  >
                            </figure>

                            <br><br><br><br>
                            <ul>
                                <li><strong>Nom d'utilisateur : </strong> <br>{{ auth()->user()->email }}
                                <li><strong>Date de création : </strong> <br>  {{ auth()->user()->created_at }}
                                <li><strong>Date de modification : </strong> <br>  {{ auth()->user()->updated_at }}
                            </ul>
                        </center>

                        <br><br><br><br><br><br><br>
                    </article>
                    @endif
              </div>

              <div class="card col-sm-8 text-left">
                    <!-- Image Fallo -->
                    <img src="img/FalloSolo.png" style="width: 20%">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr>
                <h3>Test</h3>
                <p>Lorem ipsum...</p>
              </div>

              <div class="card col-sm-1 sidenav">
                <div class="well">
                  <p>ADS</p>
                </div>
                <div class="well">
                  <p>ADS</p>
                </div>
              </div>

              <div class="col-sm-1 sidenav"></div>

          </div>
        </div>
        <script src="js/bootstrap.min.js"></script>

</body>




</html>
