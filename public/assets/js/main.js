// ==========================
// Navbar lateral
// ==========================
function toggleMenu() { document.querySelector(".lateral-navbar").classList.toggle("open"); }


// ==========================
// Preloader (logo + animación)
// ==========================
const preloader = document.getElementById("preloader");
const logo = document.getElementById("preloader-logo");

function showPreloader(callback = null) {
    preloader.classList.remove("hidden"); // Mostrar
    logo.style.animation = "spin-burst 2s ease-in-out"; // Activar animación

    setTimeout(() => {
        preloader.classList.add("hidden"); // Ocultar
        logo.style.animation = ""; // Resetear animación

        if (callback && typeof callback === "function") {
            callback();
        }
    }, 2000); // Tiempo igual a duración de animación
}

// 1. Al cargar la página
window.addEventListener("load", () => {
    showPreloader();
});


// ==========================
// Cambiar Tema (función)
// ==========================
function initThemeToggle() {
    const themeBtn = document.querySelector(".theme__button-theme");
    const themeIcon = document.querySelector(".theme-icon-main use");
    const themeText = document.getElementById("theme-text");

    if (!themeBtn || !themeIcon || !themeText) return; // seguridad

    // Restaurar tema guardado o default
    const savedTheme = localStorage.getItem("theme") || "dark";
    setTheme(savedTheme);

    themeBtn.addEventListener("click", () => {
        showPreloader(() => {
            const currentTheme = document.documentElement.getAttribute("data-theme");
            const newTheme = currentTheme === "dark" ? "light" : "dark";
            setTheme(newTheme);
            localStorage.setItem("theme", newTheme);
        });
    });

    // Función interna para aplicar el tema
    function setTheme(theme) {
        document.documentElement.setAttribute("data-theme", theme);

        // Cambiar ícono principal + texto del botón
        if (theme === "light") {
            themeIcon.setAttribute("xlink:href", "assets/icons/icon-navbar.svg#sun");
            themeText.textContent = "Light";
        } else {
            themeIcon.setAttribute("xlink:href", "assets/icons/icon-navbar.svg#moon");
            themeText.textContent = "Dark";
        }

        // Cambiar TODOS los iconos dinámicos
        document.querySelectorAll(".theme-icon").forEach(icon => {
            const useTag = icon.querySelector("use");
            const newHref = theme === "dark" 
                ? icon.dataset.iconDark 
                : icon.dataset.iconLight;

            if (useTag && newHref) {
                useTag.setAttribute("xlink:href", newHref);
            }
        });
    }
}


// Inicializar
initThemeToggle();

// ==========================
// Cambiar Idioma
// ==========================
const langButtons = document.querySelectorAll(".theme__button-lang");

langButtons.forEach(button => {
  const tooltip = button.closest(".tooltip").querySelector(".tooltip__text");

  button.addEventListener("click", () => {
    const next = i18next.language === "es" ? "en" : "es";

    showPreloader(() => {
      i18next.changeLanguage(next).then(() => {
        updateContent();

        tooltip.textContent = 
          next === "es" ? "Cambiar al Español" : "Switch to English";
      });
    });
  });
});



// ==========================
// Motras información
// ==========================
const moreInfoButtons = document.querySelectorAll(".portfolio__btn-more");

moreInfoButtons.forEach(button => {
    button.addEventListener("click", () => {
        const project = button.closest(".portfolio__project");
        const moreInfo = project.querySelector(".portfolio__more-info");
        const image = project.querySelector(".portfolio__image");

        // Alternar estado
        moreInfo.classList.toggle("open");

        if (moreInfo.classList.contains("open")) {
            // Imagen se expande en proporción al texto del mismo proyecto
            const extraHeight = moreInfo.scrollHeight / 0.7; // ajusta divisor según veas
            image.style.maxHeight = 260 + extraHeight + "px";
            button.textContent = "- info";
        } else {
            // Volver a estado original
            image.style.maxHeight = "260px";
            button.textContent = "+ info";
        }
    });
});


// ==========================
// Botón de volver arriba
// ==========================
const backToTop = document.getElementById('backToTop');
const presentationSection = document.querySelector('.presentation');

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    const presentationBottom = presentationSection.offsetTop + presentationSection.offsetHeight;

    if (scrollPos > presentationBottom) {
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
});
