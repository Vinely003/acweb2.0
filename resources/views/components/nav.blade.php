@props(['datas'])

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand">Assassin's Creed Games</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Games
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($datas as $data)
                        <a class="dropdown-item acLink" data-acid="{{ $data->id }}">{{ $data->ac_name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link text-danger">Logout</a>
            </li>
        </ul>
        <form class="searchBar form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
