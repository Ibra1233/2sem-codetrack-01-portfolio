<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Hej, jeg hedder Ibrahim!<span class="accent">Multimediedesigner</span></h1>
        <p class="tagline">Jeg designer og koder digitale løsninger med fokus på kreativitet og funktionalitet</p>
        <a href="/contact" class="button">Kontakt mig her</a>
    </div>
</section>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Om mig</h2>
                <p> Jeg er multimediedesignstuderende med faglig viden og praktisk erfaring inden for digitale designværktøjer såsom Figma og Adobe After Effects. Derudover har jeg kompetencer inden for webudvikling med fokus på HTML og CSS. Jeg har desuden indsigt i hele udviklingsprocessen af et visuelt produkt – fra idéudvikling til færdiggørelse – herunder målgruppeanalyse samt anvendelse af relevante teorier og metoder til at kvalificere og videreudvikle idéen.
            </div>
            <div class="intro-image">
                <img src="images/Selfie.jpg" alt="Headshot of Abigail looking happy" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Se mere</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projekter</h3>
                <p>Se eksempler på mine seneste projekter og løsninger</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Om</h3>
                <p>Lær mere om mine færdigheder og min baggrund</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Lad os komme i kontakt og drøfte mulighederne</p>
            </a>
        </div>
    </div>
</section>
