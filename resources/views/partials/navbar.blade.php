<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <a class="navbar-brand text-white font-weight-bold" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <form class="d-flex bg-transparent" role="search">
                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light text-dark font-weight-bold" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>