
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

      <!-- Mobile menu button -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button type="button" id="mobile-menu-button"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <!-- Logo and navigation -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

        <div class="flex shrink-0 items-center">
          <img class="h-8 w-auto"
            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
            alt="Your Company">
        </div>

        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">

            <a href="/index.php"
              class="<?= urlIs('/') || urlIs('/index.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
              Home
            </a>

            <a href="/about.php"
              class="<?= urlIs('/about.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
              About
            </a>

            <a href="/contact.php"
              class="<?= urlIs('/contact.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">
              Contact
            </a>

          </div>
        </div>
      </div>

      <!-- Notifications and profile -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

        <button type="button"
          class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-.31A8.967 8.967 0 0 1 18 10.5V9.75a6 6 0 0 0-12 0v.75a8.967 8.967 0 0 1-2.311 6.272 23.848 23.848 0 0 0 5.454.31m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <button type="button" id="profile-button"
            aria-expanded="false"
            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full"
              src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop"
              alt="User avatar">
          </button>

          <div id="profile-menu"
            class="absolute right-0 z-10 mt-2 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">

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

  <!-- Mobile navigation -->
  <div id="mobile-menu" class="hidden sm:hidden">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="/index.php" class="block rounded-md px-3 py-2 text-base font-medium <?= urlIs('/') || urlIs('/index.php') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>">Home</a>
      <a href="/about.php" class="block rounded-md px-3 py-2 text-base font-medium <?= urlIs('/about.php') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>">About</a>
      <a href="/contact.php" class="block rounded-md px-3 py-2 text-base font-medium <?= urlIs('/contact.php') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>">Contact</a>
    </div>
  </div>
</nav>

<script>
  const profileButton = document.getElementById('profile-button');
  const profileMenu = document.getElementById('profile-menu');
  const mobileButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  profileButton.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
    profileButton.setAttribute('aria-expanded', String(!profileMenu.classList.contains('hidden')));
  });

  mobileButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', (event) => {
    if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
      profileMenu.classList.add('hidden');
      profileButton.setAttribute('aria-expanded', 'false');
    }
  });
</script>
