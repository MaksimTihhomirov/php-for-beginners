
<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="max-w-5xl mx-auto py-10 px-6">

    <h1 class="text-2xl font-bold mb-8">
        Create Note
    </h1>

    <form method="POST" action="/notes/create"
          class="bg-white p-6 rounded-lg border">

        <h2 class="text-lg font-semibold mb-2">
            Note Information
        </h2>

        <p class="text-gray-500 mb-6">
            Write a new personal note.
        </p>

        <label for="body" class="block mb-2">
            Body
        </label>

        <textarea
            id="body"
            name="body"
            rows="6"
            required
            placeholder="Write your note here..."
            class="w-full border rounded-lg p-3"
        ><?= htmlspecialchars($_POST['body'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>

        <?php if (!empty($error)): ?>
            <p class="text-red-600 mt-2">
                <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>

        <div class="flex justify-end gap-4 mt-6">

            <a href="/notes" class="px-4 py-2">
                Cancel
            </a>

            <button type="submit"
                    class="bg-indigo-600 text-white px-5 py-2 rounded-lg">
                Save Note
            </button>

        </div>

    </form>

</main>

<?php require 'views/partials/footer.php'; ?>
