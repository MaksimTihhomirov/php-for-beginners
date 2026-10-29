
<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<main class="mx-auto max-w-md py-12 px-4">
    <h1 class="text-2xl font-bold text-center mb-8">
        Login to your account
    </h1>

    <form method="POST" action="/login" class="space-y-4">

        <div>
            <label for="email" class="block mb-2">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="<?= htmlspecialchars($old['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                required
                class="w-full border rounded px-3 py-2"
            >
        </div>

        <div>
            <label for="password" class="block mb-2">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                required
                class="w-full border rounded px-3 py-2"
            >
        </div>

        <?php if (isset($errors['email'])): ?>
            <p class="text-red-500 text-sm">
                <?= htmlspecialchars($errors['email']) ?>
            </p>
        <?php endif; ?>

        <?php if (isset($errors['password'])): ?>
            <p class="text-red-500 text-sm">
                <?= htmlspecialchars($errors['password']) ?>
            </p>
        <?php endif; ?>

        <?php if (isset($errors['login'])): ?>
            <p class="text-red-500 text-sm">
                <?= htmlspecialchars($errors['login']) ?>
            </p>
        <?php endif; ?>

        <button
            type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded"
        >
            Login
        </button>

    </form>
</main>

<?php require 'views/partials/footer.php'; ?>
