
<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">
            <?= htmlspecialchars($heading) ?>
        </h1>

        <p class="mt-6">
            <a href="/notes" class="text-blue-500 hover:underline">
                go back...
            </a>
        </p>

        <p class="mt-4">
            <?= htmlspecialchars($note['body']) ?>
        </p>
    </div>
</main>

<?php require 'partials/footer.php'; ?>
