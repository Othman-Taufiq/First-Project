<header class="navbar-section">

    <nav class="navbar">
        <h2 class="logo"><a href="?p=logged">Mes Petites <span>Annonces</span></a></h2>

        <div class="search-bar">
            <div id="select">
                <p id="select-text" class="select-text">Tous</p>
                <i class="fa-sharp fa-solid fa-angle-down" id="dropdown-icon"></i>

                <ul id="list">
                    <li class="options"><a href="#" class="option-list">tous</a></li>
                    <li class="options"><a href="#" class="option-list">tous les mots</a></li>
                    <li class="options"><a href="#" class="option-list">un mot</a></li>
                    <li class="options"><a href="#" class="option-list">une lettre</a></li>
                </ul>
            </div>
            <form action="" class="search-box">
                <input type="text" id="inputField" placeholder="Chercher tout...">
                <button type="submit" name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="nav-button-box flex-center-all">
            <a href="#"class = "nav-icon"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"class = "nav-icon"><i class="fa-solid fa-heart"></i></a>
            <a href="#"class = "nav-icon"><i class="fa-solid fa-circle-user" id="toggle-icon"></i></a>
            <a href="?p=ajouteAnnonce" class="nav-button nav-button-special">Poster une Annonce</a>
        </div>
        <div  id="user-options" class="user-options flex-dir-col">
            <a href="#">Mon Profile</a>
            <a href="#">Mes achats</a>
            <a href="?p=userAnnonces">Mes annonces</a>
            <form method="post">
                <button class="user-options-logout" type="submit" name="logout">Me deconnecter</button>
            </form>
        </div>
    </nav>
</header>
<script src="asset/js.js"></script>