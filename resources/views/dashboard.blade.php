<x-app-layout>
    <x-slot name="header">
        <div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid flex-row-reverse">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('messages.event_overview.menu_button') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- Collapse is used by both, Bootstrap and TailwindCSS, overwrite with .visible as workaround --}}
                    {{--  c.f. 'https://github.com/twbs/bootstrap/issues/37509#issuecomment-1366873766' --}}
                    <div class="collapse navbar-collapse visible" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-gray-900 dark:text-gray-100" href="#">
                                    <i class="bi bi-house" aria-hidden="true"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.home') }}
                                    </span>
                                    <span class="lg:hidden" aria-hidden="true">
                                        {{ __('messages.event_overview.nav.home') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-900 dark:text-gray-100" href="#">
                                    <i class="bi bi-bell" aria-hidden="true"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.notifications') }}
                                    </span>
                                    <span class="lg:hidden" aria-hidden="true">
                                        {{ __('messages.event_overview.nav.notifications') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-900 dark:text-gray-100" href="#">
                                    <i class="bi bi-calendar2-event" aria-hidden="true"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.events') }}
                                    </span>
                                    <span class="lg:hidden" aria-hidden="true">
                                        {{ __('messages.event_overview.nav.events') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-900 dark:text-gray-100" href="#">
                                    <i class="bi bi-person-circle" aria-hidden="true"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.profile') }}
                                    </span>
                                    <span class="lg:hidden" aria-hidden="true">
                                        {{ __('messages.event_overview.nav.profile') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-gray-900 dark:text-gray-100" href="#">
                                    <i class="bi bi-envelope" aria-hidden="true"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.mails') }}
                                    </span>
                                    <span class="lg:hidden" aria-hidden="true">
                                        {{ __('messages.event_overview.nav.mails') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="{{ __('messages.event_overview.search.placeholder') }}" aria-label="{{ __('messages.event_overview.search.label') }}">
                            <button class="btn btn-outline-success" type="submit">{{ __('messages.event_overview.search.submit') }}</button>
                          </form>
                    </div>
                </div>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:!bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
