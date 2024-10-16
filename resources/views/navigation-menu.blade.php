<nav x-data="{ open: false }" class="bg-white dark:!bg-gray-800 text-gray-900 dark:text-gray-100 border-b border-gray-100 dark:!border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center mr-5">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <h1 class="mb-0">{{ __('messages.dashboard.headline') }}</h1>
            </div>
        </div>
    </div>
</nav>
