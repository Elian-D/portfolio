// ==========================
// Cambiar Imagen
// ==========================
const profileImg = document.getElementById("profileImage");
const originalSrc = "assets/img/Yo-sentado.webp";
const hoverSrc = "assets/img/yo-saludando.webp";

profileImg.addEventListener("mouseenter", () => {
    // animar suavemente
    profileImg.style.opacity = "0";           // desvanecer
    profileImg.style.transform = "scale(1.01)"; // efecto leve de zoom
    setTimeout(() => {
        profileImg.src = hoverSrc;
        profileImg.style.opacity = "1";       // aparecer
    }, 200);
});

profileImg.addEventListener("mouseleave", () => {
    profileImg.style.opacity = "0";
    profileImg.style.transform = "scale(1)"; // volver al tamaño original
    setTimeout(() => {
        profileImg.src = originalSrc;
        profileImg.style.opacity = "1";
    }, 200);
});
