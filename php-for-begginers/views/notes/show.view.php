
<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <h1 class="text-2xl font-bold">
            <?= htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') ?>
        </h1>

        <p class="mt-6">
            <a href="/notes"
               class="text-blue-500 hover:underline">
                Go back...
            </a>
        </p>

        <div class="mt-4 border rounded-lg p-5 bg-white">
            <p class="whitespace-pre-wrap">
                <?= htmlspecialchars($note['body'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>

        <form method="POST" action="/notes/delete" class="mt-6">
            <input
                type="hidden"
                name="id"
                value="<?= htmlspecialchars((string) $note['id'], ENT_QUOTES, 'UTF-8') ?>"
            >

            <button
                type="submit"
                onclick="return confirm('Are you sure you want to delete this note?')"
                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
            >
                Delete Note
            </button>
        </form>

    </div>
</main>

<?php require 'views/partials/footer.php'; ?>
