
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button
                    type="button"
                    id="mobile-menu-button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Logo and navigation -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                <div class="flex shrink-0 items-center">
                    <img
                        class="h-8 w-auto"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Tailwind CSS"
                    >
                </div>

                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">

                        <a href="/"
                           class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Home
                        </a>

                        <a href="/about"
                           class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            About
                        </a>

                        <a href="/notes"
                           class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Notes
                        </a>

                        <a href="/contact"
                           class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                            Contact
                        </a>

                    </div>
                </div>
            </div>

            <!-- Login / Register / Logout -->
            <div class="flex items-center space-x-3">

                <?php if (isset($_SESSION['user'])): ?>

                    <span class="hidden sm:inline text-gray-300 text-sm">
                        <?= htmlspecialchars($_SESSION['user']['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                    </span>

                    <form method="POST" action="/logout">
                        <button
                            type="submit"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                        >
                            Logout
                        </button>
                    </form>

                <?php else: ?>

                    <a href="/login"
                       class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                        Login
                    </a>

                    <a href="/register"
                       class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
                        Register
                    </a>

                <?php endif; ?>

                <!-- Notifications -->
                <button type="button"
                    class="hidden sm:block relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9a6 6 0 0 0-12 0v.75a8.967 8.967 0 0 1-2.311 6.022 23.848 23.848 0 0 0 5.454 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/>
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <?php if (isset($_SESSION['user'])): ?>
                    <div class="relative hidden sm:block">
                        <button
                            type="button"
                            id="user-menu-button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none"
                            aria-expanded="false"
                        >
                            <span class="sr-only">Open user menu</span>
                            <img
                                class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
                                alt="User avatar"
                            >
                        </button>

                        <div
                            id="user-menu"
                            class="absolute right-0 z-10 mt-2 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5"
                        >
                            <span class="block px-4 py-2 text-sm text-gray-700">
                                My Account
                            </span>

                            <form method="POST" action="/logout">
                                <button
                                    type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                >
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Mobile navigation -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2">

            <a href="/"
               class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
                Home
            </a>

            <a href="/about"
               class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
                About
            </a>

            <a href="/notes"
               class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
                Notes
            </a>

            <a href="/contact"
               class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
                Contact
            </a>

            <?php if (isset($_SESSION['user'])): ?>
                <form method="POST" action="/logout">
                    <button
                        type="submit"
                        class="block w-full text-left text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium"
                    >
                        Logout
                    </button>
                </form>
            <?php else: ?>
                <a href="/login"
                   class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                    Login
                </a>

                <a href="/register"
                   class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                    Register
                </a>
            <?php endif; ?>

        </div>
    </div>
</nav>

<script>
    const profileButton = document.getElementById('user-menu-button');
    const profileMenu = document.getElementById('user-menu');

    const mobileButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (profileButton && profileMenu) {
        profileButton.addEventListener('click', () => {
            const isHidden = profileMenu.classList.toggle('hidden');
            profileButton.setAttribute('aria-expanded', String(!isHidden));
        });
    }

    if (mobileButton && mobileMenu) {
        mobileButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            mobileButton.setAttribute('aria-expanded', String(!isHidden));
        });
    }

    document.addEventListener('click', (event) => {
        if (profileButton && profileMenu &&
            !profileButton.contains(event.target) &&
            !profileMenu.contains(event.target)) {
            profileMenu.classList.add('hidden');
            profileButton.setAttribute('aria-expanded', 'false');
        }
    });
</script>
