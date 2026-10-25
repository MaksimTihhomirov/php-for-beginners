
<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-6">Edit Note</h1>

    <form method="POST" action="/notes/edit">

        <input type="hidden" name="_method" value="PATCH">

        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <label for="body" class="block mb-2">Body</label>

        <textarea
            id="body"
            name="body"
            rows="5"
            class="w-full border rounded p-3"
        ><?= htmlspecialchars($body ?? $note['body'], ENT_QUOTES, 'UTF-8') ?></textarea>

        <?php if (isset($errors['body'])): ?>
            <p class="text-red-500 text-sm mt-2">
                <?= htmlspecialchars($errors['body']) ?>
            </p>
        <?php endif; ?>

        <div class="mt-4">
            <a href="/note?id=<?= $note['id'] ?>" class="mr-4">
                Cancel
            </a>

            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded"
            >
                Update
            </button>
        </div>

    </form>

</main>

<?php require 'views/partials/footer.php'; ?>
