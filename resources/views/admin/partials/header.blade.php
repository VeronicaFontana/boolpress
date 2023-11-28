<header>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" target="_blank" href="{{ route("home") }}">Sito pubblico</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route("admin.home") }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{  route("admin.posts.index")  }}">Elenco post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{  route("admin.categories.index")  }}">Elenco categorie</a>
        </li>
    </ul>
</header>
