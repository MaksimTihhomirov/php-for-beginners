
<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-6">
        Create Note
    </h1>

    <form method="POST" action="/notes/create">

        <label for="body" class="block mb-2">
            Body
        </label>

        <textarea
            id="body"
            name="body"
            rows="5"
            class="w-full border rounded p-3"
            placeholder="Write your note here..."
        ><?= htmlspecialchars($body ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>

        <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-sm mt-2">
                <?= htmlspecialchars($errors['body'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>

        <div class="mt-4">
            <a href="/notes" class="mr-4">
                Cancel
            </a>

            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded"
            >
                Save Note
            </button>
        </div>

    </form>

</main>

<?php require 'partials/footer.php'; ?>
