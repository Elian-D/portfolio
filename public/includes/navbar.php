    <div id="preloader">
        <svg class="icon-top theme-icon" id="preloader-logo"
            data-icon-light="assets/icons/icon-general.svg#icon-light"
            data-icon-dark="assets/icons/icon-general.svg#icon-dark">
            <use xlink:href="assets/icons/icon-general.svg#icon-dark"></use>
        </svg>
    </div>

<nav class="lateral-navbar">
    <ul class="navbar-list">
        
    <!-- Botón abrir/cerrar -->
        <li class="menu-toggle">
            <!-- Icono -->
            <svg class="icon-top theme-icon"
                data-icon-light="assets/icons/icon-general.svg#logo-dark" 
                data-icon-dark="assets/icons/icon-general.svg#logo-light">
                <use xlink:href="assets/icons/icon-general.svg#logo-light"></use>
            </svg>
            <div class="tooltip" data-position="right">
                <button id="menu" onclick="toggleMenu()" aria-label="Abrir Menú">
                    <svg class="icon"><use xlink:href="assets/icons/icon-navbar.svg#bars"></use></svg>
                </button>
                <span data-i18n="navbar.openMenu" class="tooltip__text">Menu</span>
            </div>
        </li>

        
    <!-- Links -->
        <div class="links-container">
            <li class="nav-item">
                <a href="index.php#top" data-hide-mobile="show">
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#home"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.home">Home</span>
                </a>
            </li>
            

            <li class="nav-item">
                <a href="#portfolio" data-hide-mobile>
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#folder"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.portfolio">Portfolio</span>
                </a>
            </li>

            <li class="nav-item" data-hide-mobile="hide">
                <a href="#skills">
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#brain"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.skills">Skills</span>
                </a>
            </li>

            <li class="nav-item" data-hide-mobile="hide">
                <a href="#about">
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#cup"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.about">About</span>
                </a>
            </li>
            
            <li class="nav-item" data-hide-mobile="hide">
                <a href="#certificates"> 
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#certificate"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.certificates">Certificates</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="contact.php" data-hide-mobile>
                    <svg class="icon">
                        <use xlink:href="assets/icons/icon-navbar.svg#contact"></use>
                    </svg>
                    <span class="navbar__icon-text" data-i18n="navbar.contact">Contact Me</span>
                </a>
            </li>
        </div>

        <li class="lang-btn-close" data-hide-mobile>
            <div class="tooltip" data-position="right" >
                <button class="theme__button-lang">
                    <svg class="icon"><use xlink:href="assets/icons/icon-navbar.svg#language"></use></svg>
                </button>
                <span class="tooltip__text">Cambiar al Español</span>
            </div>
        </li>
        <!-- Theme selector + CV -->
        <li class="theme-cv">
            <div class="container-selector">
                <div class="tooltip" data-position="right">
                    <button class="theme__button-lang">
                        <svg class="icon"><use xlink:href="assets/icons/icon-navbar.svg#language"></use></svg>
                    </button>
                    <span class="tooltip__text">Cambiar al Español</span>
                </div>
                <div class="tooltip theme-icon" data-position="right">
                    <button class="theme__button-theme"><svg class="icon theme-icon-main"><use xlink:href="assets/icons/icon-navbar.svg#moon"></use></svg></button>
                    <span id="theme-text" class="tooltip__text">Dark</span>
                </div>
            </div>
            <button class="btn btn-secondary" data-i18n="cv.download">Download CV</button>
        </li>
    </ul>
</nav>
