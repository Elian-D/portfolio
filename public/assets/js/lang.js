const langButtons = document.querySelectorAll(".theme__button-lang");
const textsToChange = document.querySelectorAll("[data-section]");

let currentLang = "en"; // idioma inicial

langButtons.forEach(button => {
    button.addEventListener("click", () => {
        // Alternar idioma
        currentLang = currentLang === "en" ? "es" : "en";

        fetch(`lang/${currentLang}.json`)
            .then(res => res.json())
            .then(data => {
                textsToChange.forEach((el) => {
                    const section = el.dataset.section;
                    const value = el.dataset.value;

                    if (data[section] && data[section][value]) {
                        el.innerHTML = data[section][value];
                    }
                });
            })
            .catch(err => console.error("Error loading language file:", err));
    });
});
