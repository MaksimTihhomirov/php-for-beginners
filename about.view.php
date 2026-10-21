
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <div class="flex items-center gap-4">
                <span class="text-indigo-400 text-2xl font-bold">≋</span>

                <a href="/index.php"
                   class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm">
                    Home
                </a>

                <a href="/about.php"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm">
                    About
                </a>

                <a href="/contact.php"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm">
                    Contact
                </a>
            </div>

            <div class="flex items-center gap-4">
                <button type="button" aria-label="Notifications" class="text-gray-400 hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor"
                         stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9a6 6 0 0 0-12 0v.75a8.967 8.967 0 0 1-2.311 6.022 23.848 23.848 0 0 0 5.454 1.31m5.714 0a3 3 0 1 1-5.714 0"/>
                    </svg>
                </button>

                <div class="relative">
                    <button id="profileButton" type="button" aria-expanded="false"
                            aria-controls="profileMenu">
                        <img class="h-8 w-8 rounded-full object-cover"
                             src="https://i.pravatar.cc/100?img=12"
                             alt="Profile">
                    </button>

                    <div id="profileMenu"
                         class="hidden absolute right-0 z-20 mt-2 w-48 rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Your Profile
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Settings
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Sign out
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            <?= htmlspecialchars($heading) ?>
        </h1>
    </div>
</header>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p><?= htmlspecialchars($message) ?></p>
    </div>
</main>

<script>
    const button = document.getElementById('profileButton');
    const menu = document.getElementById('profileMenu');

    button.addEventListener('click', function () {
        const hidden = menu.classList.toggle('hidden');
        button.setAttribute('aria-expanded', String(!hidden));
    });

    document.addEventListener('click', function (event) {
        if (!button.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
        }
    });
</script>

</body>
</html>
