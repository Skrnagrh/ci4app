<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Sukron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-item nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                <a class="nav-item nav-link" href="/pages/contact">Contact</a>
                <a class="nav-item nav-link" href="/komik">Komik</a>
                <a class="nav-item nav-link" href="/orang">Daftar Orang</a>
            </div>
            <?php if (logged_in()) : ?>
                <a class="nav-item nav-link" href="/logout">Logout</a>
            <?php else : ?>
                <a class="nav-item nav-link" href="/login">Login</a>
            <?php endif;  ?>
        </div>
    </div>
</nav>