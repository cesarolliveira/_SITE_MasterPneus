<header id="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="navigation" class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo Link::getBase(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/sobre-nos">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/loja">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <input type="hidden" name="baseLink" value="<?php echo Link::getBase() ?>" />
</header>