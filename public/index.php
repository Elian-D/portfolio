<!-- Index -->
<?php
$page_title = " Elian Bertre - Desarrollador Full Stack";
$extra_css = '<link rel="stylesheet" href="assets/css/pages/index.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
<!-- Contenido Aquí -->
    <?php include 'includes/top.php' ?>

    <!-- Sección de Presentacion -->
    <section class="presentation">
        <div class="presentation__container-text">
            <div class="presentation__container-name">
                <div class="presentation__arrow"><</div>
                <h1 class="presentation__name">Elian Bertre</h1>
                <div class="presentation__arrow">/></div>
            </div>
            <p class="presentation__role" data-i18n="presentation.role">Full Stack Developer</p>
            <p class="presentation__pagraph-1" data-i18n="presentation.p1">
            I am a young Dominican passionate about technology and web development. I am constantly learning and striving to improve my skills every day in order to build projects that are increasingly professional and functional.
            </p>
            <p class="presentation__pagraph-2">
                <span data-i18n="presentation.p2_part1">If you would like to know more about my background and experience, feel free to check out </span>
                <a href="#" class="presentation__link" data-i18n="presentation.p2_link1">my resume</a>
                <span data-i18n="presentation.p2_part2"> or visit </span>
                <a href="https://www.linkedin.com/in/elian-david-bertre-cuello-8296a7354/" class="presentation__link" data-i18n="presentation.p2_link2">my LinkedIn profile</a>
                <span data-i18n="presentation.p2_part3">.</span>
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
                <h2 id="portfolio" class="portfolio__title" data-i18n="portfolio.title">Portfolio</h2>
            <div class="arrow">/></div>
        </div>
        <div class="portfolio__project">
            <div class="portfolio__container-image">
                <img src="assets/img/project-1.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            </div>
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-i18n="portfolio.projects.0.title">Robotfrías Web Page</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="https://github.com/Elian-D/robotfrias.git" target="_blank" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="https://www.robotfria.com" target="_blank" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-i18n="portfolio.description">Description</h4>
                    <p class="portfolio__description-paragraph" data-i18n="portfolio.projects.0.description">Robotfrías es un proyecto que desarrolla soluciones digitales completas: sitios web modernos, software a medida y contenido creativo para marcas. También integra una plataforma educativa con cursos y clases orientadas a quienes desean iniciarse en el mundo tecnológico.</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <ul class="portfolio__more-feature" data-i18n-list="portfolio.projects.0.features">
                        <li class="portfolio__item-feature">Desarrollo web moderno y responsivo</li>
                        <li class="portfolio__item-feature">Creación de software a medida</li>
                        <li class="portfolio__item-feature">Producción de contenido digital profesional</li>
                        <li class="portfolio__item-feature">Cursos y clases para principiantes en tecnología</li>
                        <li class="portfolio__item-feature">Soluciones integrales para emprendedores y pequeñas empresas</li>
                        <li class="portfolio__item-feature">Enfoque que combina servicios tecnológicos y formación</li>
                    </ul>
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
            <div class="portfolio__container-image">
                <img src="assets/img/project-2.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            </div>
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-i18n="portfolio.projects.1.title">En Ruta Ando Website</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="https://github.com/Elian-D/enrutando" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="https://www.enrutaando.com/" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-i18n="portfolio.description">Description</h4>
                    <p class="portfolio__description-paragraph" data-i18n="portfolio.projects.1.description">Sitio web moderno desarrollado para una empresa dominicana de ecoturismo. Su objetivo es ofrecer una experiencia digital clara, atractiva y fácil de navegar, permitiendo que los usuarios descubran rutas, excursiones y actividades naturales de forma intuitiva. La web está diseñada para comunicar profesionalidad mientras mantiene una estética fresca y acorde al entorno ecológico.</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <ul class="portfolio__more-feature" data-i18n-list="portfolio.projects.1.features">
                        <li class="portfolio__item-feature">Simple navigation focused on user experience</li>
                        <li class="portfolio__item-feature">Organized section for tours and activities</li>
                        <li class="portfolio__item-feature">Visual design inspired by Dominican nature (greens, earth tones, large photos)</li>
                        <li class="portfolio__item-feature">Well-distributed and easy-to-read information</li>
                        <li class="portfolio__item-feature">Optimization for mobile devices and tablets</li>
                        <li class="portfolio__item-feature">Fast loading time and lightweight structure</li>
                        <li class="portfolio__item-feature">System prepared to add more routes and content in the future</li>
                        <li class="portfolio__item-feature">Focus on highlighting the company's safety and professionalism</li>
                    </ul>
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
            <div class="portfolio__container-image">
                <img src="assets/img/project-3.webp" class="portfolio__image" alt="Project 1" loading="lazy">
            </div>
            <div class="portfolio__container-content">
                <div class="portfolio__container-title-links">
                    <h3 class="portfolio__subtitle" data-i18n="portfolio.projects.2.title">Web Page Polytechnic</h3>
                    <div class="portfolio__links">
                        <div class="tooltip" data-position="top">
                            <a href="https://github.com/Elian-D/web-politecnico" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.repo">View Repo</span>
                        </div>
                        <div class="tooltip" data-position="top">
                            <a href="#demo" class="portfolio__icon-link"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#demo"></use></svg></a>
                            <span class="tooltip__text" data-i18n="portfolio.links.demo">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio__description-container">
                    <h4 class="portfolio__description-title" data-i18n="portfolio.description">Description</h4>
                    <p class="portfolio__description-paragraph" data-i18n="portfolio.projects.1.description">Sitio web moderno desarrollado para una empresa dominicana de ecoturismo. Su objetivo es ofrecer una experiencia digital clara, atractiva y fácil de navegar, permitiendo que los usuarios descubran rutas, excursiones y actividades naturales de forma intuitiva. La web está diseñada para comunicar profesionalidad mientras mantiene una estética fresca y acorde al entorno ecológico.</p>
                </div>
                <div class="portfolio__link-more">
                    <button class="portfolio__btn-more">+ info</button>
                </div>
                <div class="portfolio__more-info">
                    <ul class="portfolio__more-feature" data-i18n-list="portfolio.projects.2.features">
                        <li class="portfolio__item-feature">Modern institutional design with a focus on the center’s visual identity</li>
                        <li class="portfolio__item-feature">Clear section structure: programs, services, faculty, announcements</li>
                        <li class="portfolio__item-feature">Content organization that facilitates navigation for students and visitors</li>
                        <li class="portfolio__item-feature">Dynamic sections prepared for future posts or events</li>
                        <li class="portfolio__item-feature">Architecture designed to reduce maintenance and simplify updates</li>
                        <li class="portfolio__item-feature">Optimization for mobile devices, tablets, and laptops</li>
                        <li class="portfolio__item-feature">Proper use of visual hierarchy to improve readability</li>
                        <li class="portfolio__item-feature">Focus on accessibility and user experience</li>
                    </ul>
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
        <a href="#portfolio" class="btn btn-primary" data-i18n="portfolio.more">See more projects</a>
    </section>

    <!-- skills -->
    <section class="skills">
        <div class="container-title-arrows">
            <div class="arrow"><</div>
            <h2 id="skills" class="skills__title" data-i18n="skills.title">Skills</h2>
            <div class="arrow">/></div>
        </div>
        <div class="skills__container-languages">
            <h3 class="skills__subtitle"><span class="skills__decorator">&gt;</span> <span data-i18n="skills.languages">Languages & Frameworks</span></h3>
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
            <h3 class="skills__subtitle"><span class="skills__decorator">&gt;</span> <span data-i18n="skills.tools">Tools</span></h3> 
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
        <div class="about__container-elements">
            <div class="about__container-text">
                <div class="container-title-arrows">
                    <div class="arrow"><</div>
                        <h2 id="about" class="about__title" data-i18n="about.title">About Me</h2>
                    <div class="arrow">/></div>
                </div>
                <p class="about__text" data-i18n="about.p1">
                    I've always had a <b>strong interest</b> in technology; I loved learning everything related to computers and software, a passion I inherited from my father.
                </p>
                <p class="about__text" data-i18n="about.p2">
                    I am currently studying web development, where I am deepening my knowledge and <b>skills</b> in programming and digital design.
                </p>
                <p class="about__text" data-i18n="about.p3">
                    In the future, I plan to study <b>Software Engineering</b> at ITLA, and I also enjoy playing chess to train my mind. You can play with me at <a href="https://www.chess.com" target="_blank" class="about__link"><b>chess.com</b></a>.
                </p>

                <div class="about__hobbies">
                    <h2 class="about__hobbies-title" data-i18n="about.hobbiesTitle">More hobbies?</h2>
                    <div class="about__hobbies_container">
                        <span class="about__hobby" data-i18n="about.hobbies.hob1">Solve Rubik's Cube</span>
                        <span class="about__hobby" data-i18n="about.hobbies.hob2">Do exercise</span>
                        <span class="about__hobby" data-i18n="about.hobbies.hob3">Learn new things</span>
                    </div>
                </div>
            </div>
            <div class="about__container-image">
                <img src="assets/img/Sobre-mi.webp" alt="about me image" loading="lazy">
            </div>
        </div>
    </section>


    <section class="certificates">
            <div class="container-title-arrows">
                <div class="arrow"><</div>
                    <h2 id="certificates" class="certificates__title" data-i18n="certificates.title">Certificates</h2>
                <div class="arrow">/></div>
            </div>
            <div class="certificates__grid">
            <div class="certificate__card">
                <img src="assets/img/Certificado_PowerBI.webp" loading="lazy" alt="Certificate 1" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-i18n="certificates.item1">Diploma in Business Intelligence with Power BI</h3>
                    <p class="certificate__org">ITLA · 2025</p>
                    <a href="assets/pdf/Certificado_Diplomado_Business_Intelligence_con_Power_BI.pdf" target="_blank" class="btn btn-primary" data-i18n="certificates.button">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Base-de-datos.webp" loading="lazy" alt="Certificate 2" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-i18n="certificates.item2">Database Administration</h3>
                    <p class="certificate__org">ITLA · 2025</p>
                    <a href="assets/pdf/Certificado_Administración_de_Bases_de_Datos_1_compressed.pdf" target="_blank" class="btn btn-primary" data-i18n="certificates.button">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Fundamentos-Python-intermedio.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-i18n="certificates.item3">Programming with Intermediate Python</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Curso_Programación_con_Python_Intermedio.pdf" target="_blank" class="btn btn-primary" data-i18n="certificates.button">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Fundamentos-Python.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-i18n="certificates.item4">Python Programming Fundamentals</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Fundamentos_de_Programación_con_Python.pdf" target="_blank" class="btn btn-primary" data-i18n="certificates.button">View Certificate</a>
                </div>
            </div>
            <div class="certificate__card">
                <img src="assets/img/Certificado_Introduccion-programacion.webp" loading="lazy" alt="Certificate 3" class="certificate__img">
                <div class="certificate__overlay">
                    <h3 class="certificate__name" data-i18n="certificates.item5">Introduccion to programming</h3>
                    <p class="certificate__org">ITLA · 2024</p>
                    <a href="assets/pdf/Certificado_Introducción_a_la_programación.pdf" target="_blank" class="btn btn-primary" data-i18n="certificates.button">View Certificate</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/change-imame.js" ></script>

<?php include 'includes/footer.php'; ?>

