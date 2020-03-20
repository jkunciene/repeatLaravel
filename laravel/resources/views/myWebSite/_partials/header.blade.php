<header class="site-navbar container py-0 " role="banner">

    <!-- <div class="container"> -->
    <div class="row align-items-center">

        <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="/" class="text-white mb-0">Skelbimai</a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active"><a href="/">Pagrindinis</a></li>
                    <li><a href="/lessons">Pamokos</a></li>
                    <li class="has-children">
                        <a href="">Apie</a>
                        <ul class="dropdown">
                            <li><a href="/about">Apie norą dalintis</a></li>
                        </ul>
                    </li>
                    <li class="mr-5"><a href="/contact">Kontaktai</a></li>
                    @auth
                        <li class="cta"><a href="/logout"><span class="bg-primary text-white rounded">Log Out</span></a>
                        </li>
                    @endauth

                    @guest
                        <li class="cta"><a href="/login"><span class="bg-primary text-white rounded">Log In</span></a>
                        </li>

                        <li><a href="/register" class="cta"><span class="bg-primary text-white rounded">Register</span></a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
        </div>

    </div>
    <!-- </div> -->

</header>
