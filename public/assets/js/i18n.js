i18next
  .use(i18nextHttpBackend)
  .init({
    lng: "es", 
    fallbackLng: "es",
    debug: true,
    backend: {
      loadPath: "lang/{{lng}}.json"
    }
  })
  .then(() => updateContent());

// ==========================
// UNIFICAR TODO EN updateContent()
// ==========================
function updateContent() {
  updateTextElements();
  updateListElements();
  updatePlaceholders();
}

// ==========================
// TEXTOS NORMALES
// ==========================
function updateTextElements() {
  const nodes = document.querySelectorAll("[data-i18n]");

  nodes.forEach(node => {
    const key = node.getAttribute("data-i18n");
    const value = i18next.t(key, { returnObjects: false });

    if (typeof value === "string") {
      node.innerHTML = value;
    }
  });
}

// ==========================
// LISTAS DINÁMICAS
// ==========================
function updateListElements() {
  const lists = document.querySelectorAll("[data-i18n-list]");

  lists.forEach(list => {
    const key = list.getAttribute("data-i18n-list");

    const items = i18next.t(key, { returnObjects: true });

    if (Array.isArray(items)) {
      list.innerHTML = items
        .map(item => `<li class="portfolio__item-feature">${item}</li>`)
        .join("");
    }
  });
}

// ==========================
// PLACEHOLDERS
// ==========================
function updatePlaceholders() {
  const nodes = document.querySelectorAll("[data-i18n-placeholder]");

  nodes.forEach(node => {
    const key = node.getAttribute("data-i18n-placeholder");
    const value = i18next.t(key);

    node.placeholder = value;
  });
}


