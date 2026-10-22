
<?php
$currentPage = basename($_SERVER['SCRIPT_NAME']);

$links = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'contact.php' => 'Contact'
];
?>

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <div class="flex items-center gap-8">

                <a href="index.php" class="text-2xl font-bold text-indigo-400">
                    ≋
                </a>

                <div class="flex items-center space-x-2">

                    <?php foreach ($links as $url => $label): ?>

                        <a
                            href="<?= $url ?>"
                            class="rounded-md px-3 py-2 text-sm font-medium
                            <?= $currentPage === $url
                                ? 'bg-gray-900 text-white'
                                : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>"
                        >
                            <?= $label ?>
                        </a>

                    <?php endforeach; ?>

                </div>
            </div>

            <div class="flex items-center gap-4">

                <button type="button"
                    aria-label="Notifications"
                    class="rounded-full p-2 text-gray-300 hover:bg-gray-700 hover:text-white">

                    <svg class="h-6 w-6" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 00-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0m6 0H9"/>
                    </svg>
                </button>

                <div class="relative">

                    <button
                        id="profileButton"
                        type="button"
                        aria-expanded="false"
                        aria-controls="profileMenu"
                        class="flex rounded-full focus:outline-none focus:ring-2 focus:ring-white"
                    >
                        <img
                            class="h-8 w-8 rounded-full"
                            src="https://i.pravatar.cc/100?img=12"
                            alt="Profile"
                        >
                    </button>

                    <div
                        id="profileMenu"
                        class="absolute right-0 z-20 mt-2 hidden w-48 rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5"
                    >

                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Your Profile
                        </a>

                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Settings
                        </a>

                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Sign out
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
</nav>

<script>
    const profileButton = document.getElementById('profileButton');
    const profileMenu = document.getElementById('profileMenu');

    profileButton.addEventListener('click', () => {
        const isHidden = profileMenu.classList.toggle('hidden');
        profileButton.setAttribute('aria-expanded', String(!isHidden));
    });

    document.addEventListener('click', (event) => {
        if (!profileButton.contains(event.target) &&
            !profileMenu.contains(event.target)) {
            profileMenu.classList.add('hidden');
            profileButton.setAttribute('aria-expanded', 'false');
        }
    });
</script>
