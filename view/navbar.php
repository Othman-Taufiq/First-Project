<?php include "head.php" ?>

<header class="navbar-section">
    <nav class="navbar">
        <h1 class="logo"><a href="home.php">P'tites <span>Annonces</span></a></h1>

        <div class="search-bar">
            <div id="select">
                <p id="select-text" class="select-text">Tous</p>
                <i class="fa-sharp fa-solid fa-angle-down" id="dropdown-icon"></i>

                <ul id="list">
                    <li class="options"><a href="#" class="option">tous</a></li>
                    <li class="options"><a href="#" class="option">tous les mots</a></li>
                    <li class="options"><a href="#" class="option">un mot</a></li>
                    <li class="options"><a href="#" class="option">une lettre</a></li>
                </ul>
            </div>
            <form action="" class="search-box">
                <input type="text" id="inputField" placeholder="Chercher tout...">
                <button type="submit" name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <ul class="right-button">
            <li><a href="signup.php">S'inscrire</a></li>
            <li><a href="login.php">Se connecter</a></li>
        </ul>
    </nav>
</header>
<script src="../asset/js.js"></script>