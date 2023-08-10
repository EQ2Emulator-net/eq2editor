<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/sidebar.php'); ?>

<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($characters as $character): ?>
                <li>
                    <a href="/character?id=<?= $character['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($character['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Character Index</a>
        </p>
    </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>