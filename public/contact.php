<!-- Index -->
<?php
$page_title = " Elian Bertre - Contact Me";
$extra_css = '<link rel="stylesheet" href="assets/css/pages/contact.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Main -->
<main>
    <!-- Contenido Aquí -->
<?php include 'includes/top.php' ?>

    <section class="form-contact">
        <div class="form__menssage">
            <div class="form__menssage-container">
                <h2 class="form__menssage-title" data-i18n="contact.title">Contac ME</h2>
                <p class="form__menssage-text" data-i18n="contact.subtitle">The best way to start something great is with a conversation. Write to me and let's talk about how we can shape your ideas.</p>
            </div>
            <div class="form__email-container">
                <svg class="icon"><use xlink:href="assets/icons/icon-general.svg#email"></use></svg>
                <a href="mailto:eliandavidbertrecuello19@gmail.com" class="form__email">eliandavidbertrecuello19@gmail.com</a>
            </div>
            <div class="form__social-container">
                <svg class="icon"><use xlink:href="assets/icons/icon-general.svg#like"></use></svg>
                <div class="form__social-media">
                    <a class="form__icon" href="https://github.com/tu-usuario" target="_blank"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#github"></use></svg></a>
                    <a class="form__icon" href="https://linkedin.com/in/tu-usuario" target="_blank"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#li"></use></svg></a>
                    <a class="form__icon" href="https://twitter.com/tu-usuario" target="_blank"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#tw"></use></svg></a>
                    <a class="form__icon" href="https://instagram.com/tu-usuario" target="_blank"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#insta"></use></svg></a>
                    <a class="form__icon" href="https://facebook.com/tu-usuario" target="_blank"><svg class="icon"><use xlink:href="assets/icons/icon-general.svg#face"></use></svg></a>
                </div>
            </div>
        </div>
        <div class="form__container">
            <form>
                <div class="form__container-elements">
                    <label for="name" data-i18n="contact.form.nameLabel">Nombre</label>
                    <input type="text" name="name" placeholder="Nombre Completo" data-i18n-placeholder="contact.form.namePlaceholder">
                </div>
                <div class="form__container-elements">
                    <label for="name" data-i18n="contact.form.emailLabel">Email</label>
                    <input type="email" name="name" placeholder="Email" data-i18n-placeholder="contact.form.emailPlaceholder">
                </div>
                <div class="form__container-elements">
                    <label for="menssage" data-i18n="contact.form.messageLabel">Mensaje</label>
                    <textarea name="menssage" id="menssage" placeholder="Mensaje" data-i18n-placeholder="contact.form.messagePlaceholder"></textarea>
                </div>

                <button class="btn btn-primary" type="submit" data-i18n="contact.form.sendButton">Enviar</button>
            </form>
        </div>
    </section>

</main>
<?php include 'includes/footer.php'; ?>