<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/sidebar.php'); ?>

<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline"> go back...</a>
        </p>
        
        <p><?= htmlspecialchars($note['body']) ?></p>
        <footer class="mt-6">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
        </footer>

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="submit" class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>