
<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="max-w-5xl mx-auto py-10 px-6">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-2xl font-bold">
            My Notes
        </h1>

        <a href="/notes/create"
           class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
            Create Note
        </a>

    </div>

    <?php if (empty($notes)): ?>

        <p class="text-gray-500">
            No notes yet.
        </p>

    <?php else: ?>

        <div class="space-y-4">

            <?php foreach ($notes as $note): ?>

                <div class="border rounded-lg p-5 bg-white">

                    <a href="/note?id=<?= (int) $note['id'] ?>"
                       class="text-indigo-600 font-semibold">

                        <?= htmlspecialchars(
                            mb_strimwidth($note['body'], 0, 60, '...'),
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</main>

<?php require 'views/partials/footer.php'; ?>
