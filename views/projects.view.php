<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var \App\Dto\ProjectDto[] $projects */

$this->extend('layout');
?>

<?php $this->start('title', 'Projects') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Mine projekter
        </h1>
        <p class="page-intro">
            Her præsenteres et udvalg af de projekter, jeg har arbejdet med i løbet af min studietid.
        </p>
    </div>
</section>

<section class="project-list">
    <div class="container">
        <div class="project-grid">
            <?php foreach ($projects as $index => $project): ?>
                <div
                    class="project-row <?= $index % 2 === 1 ? 'project-row--reverse' : '' ?>"
                >
                    <div class="project-image">
                        <img
                            src="<?= htmlspecialchars($project->image) ?>"
                            alt="<?= htmlspecialchars($project->title) ?>"
                        >
                    </div>
                    <div class="project-content">
                        <h2>
                            <?= htmlspecialchars($project->title) ?>
                        </h2>
                        <p class="project-description">
                            <?= htmlspecialchars($project->description) ?>
                        </p>
                        <p class="technologies">
                            <strong>Technologies:</strong>
                            <?= htmlspecialchars($project->technologies) ?>
                        </p>
                        <div class="project-actions">
                            <a
                                href="<?= htmlspecialchars($project->link) ?>"
                                class="btn-view-project"
                            >
                                Se projekt
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
