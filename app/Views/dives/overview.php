<h2><?= esc($title) ?></h2>

<?php if (!empty($dives) && is_array($dives)) : ?>

    <?php foreach ($dives as $news_item) : ?>

        <h3><?= esc($news_item['ID']) ?></h3>

        <div class="main">
            <?= esc($news_item['Place']) ?>
        </div>
        <p><a href="/dives/<?= esc($news_item['ID'], 'url') ?>">View article</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No dives</h3>

    <p>Unable to find any dives for you.</p>

<?php endif ?>