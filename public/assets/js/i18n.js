i18next
  .use(i18nextHttpBackend)
  .init({
    lng: "es", // idioma inicial
    fallbackLng: "es",
    debug: true,
    backend: {
      loadPath: "lang/{{lng}}.json"
    }
  })
  .then(() => updateContent());

function updateContent() {
  const nodes = document.querySelectorAll("[data-i18n]");

  nodes.forEach(node => {
    const key = node.getAttribute("data-i18n");
    const value = i18next.t(key);

    node.innerHTML = value;
  });
}
