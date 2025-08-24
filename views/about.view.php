<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'About Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Om mig
        </h1>
        <p class="page-intro">
            Få indblik i min rejse, mine evner og min passion for webudvikling – hvor jeg skaber elegante og brugervenlige løsninger.
        </p>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-heading">Om mig</h2>
                <p>
                    Jeg har en stor passion for at kode og skabe digitale løsninger, hvor jeg kan kombinere kreativitet og tekniske færdigheder.
                    Jeg finder det særligt spændende at tage en idé og udvikle den til et fungerende produkt, hvor design, funktionalitet og brugeroplevelse går op i en højere enhed.
                </p>
                <p>
                    Mit arbejde giver mig mulighed for at udfordre mig selv, eksperimentere med digitale værktøjer og hele tiden lære nyt.
                </p>
                <p>
                    I min fritid spiller jeg bordtennis og løber, hvilket giver mig energi og overskud i hverdagen.
                </p>
            </div>

            <div class="about-image">
                <img src="images/Selfie.jpg" alt="Headshot of Abigail looking suspicious" class="portrait-image">
            </div>
        </div>
    </div>
</section>

<section class="skills section-padding">
    <div class="container">
        <h2 class="section-heading">Skills</h2>
        <div class="skill-items">
            <span class="skill-tag">HTML/CSS</span>
            <span class="skill-tag">UX/UI design</span>
            <span class="skill-tag">Digital prototyping</span>
            <span class="skill-tag">Videoredigering</span>
            <span class="skill-tag">Kommunikation og storytelling</span>
            <span class="skill-tag">Projekthåndtering og samarbejde</span>
            <span class="skill-tag">Design thinking</span>
        </div>
    </div>
</section>
