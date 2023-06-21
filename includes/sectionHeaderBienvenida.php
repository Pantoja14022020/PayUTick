<header class="header">
    <pre>
    <?= print_r($_SESSION['info_account']) ?>
    </pre>
    <section class="slider">
        <img src="./img/img1.jpg" id="imageSlider" alt="image">
    </section>

    <section class="overlay">
        <nav class="navegacion">
            <div id="logo"></div>
            <div class="menu-options">
                <span id="carritoBtn"><i class="fa-solid fa-cart-shopping"></i><b id="countItems">0</b></span>
                <div class="data-profile">
                    <div id="profile-img"><img src="./img/profile.jpg" alt="user"></div>
                    <p>tl419411@uaeh.edu.mx</p>
                    <i class="fa-solid fa-caret-down" id="btn-profile"></i>
                    <ul id="signout-option" class="hide-menu-profile">
                        <li id="logout"><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="content">
            <h1>Parque acuático <span>"Dios Padre"</span></h1>
            <h3>¡El parque más padre!</h3>
        </aside>
    </section>
</header>