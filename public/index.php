<!-- Index -->
<?php
$page_title = " Elian Bertre - Desarrollador Full Stack";
$extra_css = '<link rel="stylesheet" href="assets/css/index.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
<!-- Contenido Aquí -->
    <?php include 'includes/top.php' ?>

    <section class="presentation">
        <div class="presentation__container-text">
            <div class="presentation__container-name">
                <div class="presentation__arrow"><</div>
                <h1 class="presentation__name" data-section="presentation" data-value="name">Elian Bertre</h1>
                <div class="presentation__arrow">/></div>
            </div>
            <p class="presentation__role" data-section="presentation" data-value="role">Full Stack Developer</p>
            <p class="presentation__pagraph-1" data-section="presentation" data-value="pagraph-1">
            I am a young Dominican passionate about technology and web development. I am constantly learning and striving to improve my skills every day in order to build projects that are increasingly professional and functional.
            </p>
            <p class="presentation__pagraph-2">
                <span data-section="presentation" data-value="pagraph-2-text-1">If you would like to know more about my background and experience, feel free to check out </span>
                <a href="#" class="presentation__link" data-section="presentation" data-value="link-1">my resume</a>
                <span data-section="presentation" data-value="pagraph-2-text-2"> or visit </span>
                <a href="#" class="presentation__link" data-section="presentation" data-value="link-2">my LinkedIn profile</a>
                <span data-section="presentation" data-value="pagraph-2-text-3">.</span>
            </p>
        </div>
        <div class="presentation__container-image">
            <img id="profileImage" src="assets/img/Yo-sentado.webp" alt="Presentation image" loading="lazy">
        </div>
        <div class="presentation__icon-scroll">
            <a href="#portfolio"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#mouse"></use></svg></a> 
        </div>
    </section>

    <section class="portfolio">
        <div class="container-title-arrows">
            <div class="arrow"><</div>
                <h2 id="portfolio" class="portfolio__title" data-section="portfolio" data-value="title">Portfolio</h2>
            <div class="arrow">/></div>
        </div>
        <div class="portfolio__project">
            <img src="assets/img/project-1.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-section="portfolio" data-value="project-1">Web Page Enterprise</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="#repo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="#demo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-section="portfolio" data-value="description">Description</h4>
                    <p class="portfolio__description-paragraph" data-section="portfolio" data-value="description-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum assumenda debitis similique illo quos voluptatibus error voluptatum vero fugit, ea dolore iusto, vel ullam. Ea qui debitis laboriosam quae placeat!</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <p class="portfolio__info" data-section="portfolio" data-value="project-info-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, perspiciatis. Voluptatibus possimus voluptates illum esse dolor exercitationem ipsum harum.</p>
                </div>
                <div class="portfolio__elements">
                    <div class="portfolio__languajes">
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#html"></use>
                            </svg>
                            <span class="tooltip__text" >HTML</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#css"></use>
                            </svg>
                            <span class="tooltip__text" >CSS</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#js"></use>
                            </svg>
                            <span class="tooltip__text" >JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio__project">
            <img src="assets/img/project-2.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-section="portfolio" data-value="project-2">Web Page Ecotourism</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="#repo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="#demo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-section="portfolio" data-value="description">Description</h4>
                    <p class="portfolio__description-paragraph" data-section="portfolio" data-value="description-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum assumenda debitis similique illo quos voluptatibus error voluptatum vero fugit, ea dolore iusto, vel ullam. Ea qui debitis laboriosam quae placeat!</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <p class="portfolio__info" data-section="portfolio" data-value="project-info-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, perspiciatis. Voluptatibus possimus voluptates illum esse dolor exercitationem ipsum harum.</p>
                </div>
                <div class="portfolio__elements">
                    <div class="portfolio__languajes">
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#html"></use>
                            </svg>
                            <span class="tooltip__text" >HTML</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#css"></use>
                            </svg>
                            <span class="tooltip__text" >CSS</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#js"></use>
                            </svg>
                            <span class="tooltip__text" >JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <div class="portfolio__project">
            <img src="assets/img/project-3.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-section="portfolio" data-value="project-3">Web Page Polytechnic</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="#repo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="#demo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-section="portfolio" data-value="demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-section="portfolio" data-value="description">Description</h4>
                    <p class="portfolio__description-paragraph" data-section="portfolio" data-value="description-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum assumenda debitis similique illo quos voluptatibus error voluptatum vero fugit, ea dolore iusto, vel ullam. Ea qui debitis laboriosam quae placeat!</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <p class="portfolio__info" data-section="portfolio" data-value="project-info-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, perspiciatis. Voluptatibus possimus voluptates illum esse dolor exercitationem ipsum harum.</p>
                </div>
                <div class="portfolio__elements">
                    <div class="portfolio__languajes">
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#html"></use>
                            </svg>
                            <span class="tooltip__text" >HTML</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#css"></use>
                            </svg>
                            <span class="tooltip__text" >CSS</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#js"></use>
                            </svg>
                            <span class="tooltip__text" >JavaScript</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#py"></use>
                            </svg>
                            <span class="tooltip__text" >Python</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <svg class="icon">
                                <use xlink:href="assets/icons/icon-general.svg#sql"></use>
                            </svg>
                            <span class="tooltip__text" >MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#portfolio" class="btn btn-primary" data-section="portfolio" data-value="more">See more projects</a>
    </section>

    <!-- skills -->
    <section class="skills">
        <div class="container-title-arrows">
            <div class="arrow"><</div>
            <h2 id="skills" class="skills__title" data-section="skills" data-value="title">Skills</h2>
            <div class="arrow">/></div>
        </div>
        <div class="skills__container-languages">
            <h3 class="skills__subtitle"><span class="skills__decorator">&gt;</span> <span data-section="skills" data-value="language">Languages & Frameworks</span></h3>
            <ul class="skills__list-elements">
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#html"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">HTML</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#css"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">CSS</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#js"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">JavaScript</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#py"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Python</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#sql"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">MySql</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#bootstrap"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Bootstrap</span>
                </div>
            </ul>
        </div>
        <div class="skills__container-tools">
            <h3 class="skills__subtitle"><span class="skills__decorator">&gt;</span> <span data-section="skills" data-value="tool">Tools</span></h3> 
            <ul class="skills__list-elements">
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#figma"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Figma</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#git"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Git</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use id="github" xlink:href="assets/icons/icon-general.svg#github"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Github</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#vscode"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">Visual Studio Code</span>
                </div>
                <div class="tooltip" data-position="top">
                    <li class="skills__list-item">
                        <svg class="icon">
                            <use xlink:href="assets/icons/icon-general.svg#xampp"></use>
                        </svg>
                    </li>
                    <span class="tooltip__text">XAMPP</span>
                </div>
            </ul>
        </div>
    </section>

    <!-- Sobre mí -->
    <section class="about">
        <div class="about__content">
            <div class="about__container-elements">
                <div class="about__container-text">
                    <div class="container-title-arrows">
                        <div class="arrow"><</div>
                            <h2 id="about" class="about__title" data-section="about" data-value="title">About Me</h2>
                        <div class="arrow">/></div>
                    </div>
                    <p class="about__text" data-section="about" data-value="text-1">
                        I've always had a <b>strong interest</b> in technology; I loved learning everything related to computers and software, a passion I inherited from my father.
                    </p>
                    <p class="about__text" data-section="about" data-value="text-2">
                        I am currently studying web development, where I am deepening my knowledge and <b>skills</b> in programming and digital design.
                    </p>
                    <p class="about__text" data-section="about" data-value="text-3">
                        In the future, I plan to study <b>Software Engineering</b> at ITLA, and I also enjoy playing chess to train my mind. You can play with me at <a href="https://www.chess.com" target="_blank" class="about__link"><b>chess.com</b></a>.
                    </p>

                    <div class="about__hobbies">
                        <h2 class="about__hobbies-title" data-section="about" data-value="hobbie-title">More hobbies?</h2>
                        <div class="about__hobbies_container">
                            <span class="about__hobby" data-section="about" data-value="hobbie-1">Solve Rubik's Cube</span>
                            <span class="about__hobby" data-section="about" data-value="hobbie-2">Do exercise</span>
                            <span class="about__hobby" data-section="about" data-value="hobbie-3">Learn new things</span>
                        </div>
                    </div>
                </div>
                <div class="about__container-image">
                    <img src="assets/img/Sobre-mi.webp" alt="about me image" loading="lazy">
                </div>
            </div>
        </div>
    </section>


    <section class="certificates">
            <div class="container-title-arrows">
                <div class="arrow"><</div>
                    <h2 id="certificates" class="certificates__title" data-section="certificates" data-value="title">Certificates</h2>
                <div class="arrow">/></div>
            </div>
            <div class="certificates__grid">
            <div class="certificate__card">
                <img src="assets/img/Certificado_PowerBI.webp" loading="lazy" alt="Certificate 1" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-section="certificates" data-value="cert1">Diploma in Business Intelligence with Power BI</h3>
                    <p class="certificate__org">ITLA · 2025</p>
                    <a href="assets/pdf/Certificado_Diplomado_Business_Intelligence_con_Power_BI.pdf" target="_blank" class="btn btn-primary" data-section="certificates" data-value="btn-certificate">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Base-de-datos.webp" loading="lazy" alt="Certificate 2" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-section="certificates" data-value="cert2">Database Administration</h3>
                    <p class="certificate__org">ITLA · 2025</p>
                    <a href="assets/pdf/Certificado_Administración_de_Bases_de_Datos_1_compressed.pdf" target="_blank" class="btn btn-primary" data-section="certificates" data-value="btn-certificate">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Fundamentos-Python-intermedio.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-section="certificates" data-value="cert3">Programming with Intermediate Python</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Curso_Programación_con_Python_Intermedio.pdf" target="_blank" class="btn btn-primary" data-section="certificates" data-value="btn-certificate">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Fundamentos-Python.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-section="certificates" data-value="cert4">Python Programming Fundamentals</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Fundamentos_de_Programación_con_Python.pdf" target="_blank" class="btn btn-primary" data-section="certificates" data-value="btn-certificate">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Introduccion-programacion.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-section="certificates" data-value="cert5">Introduccion to programming</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Introducción_a_la_programación.pdf" target="_blank" class="btn btn-primary" data-section="certificates" data-value="btn-certificate">View Certificate</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/change-imame.js" ></script>

<?php include 'includes/footer.php'; ?>

