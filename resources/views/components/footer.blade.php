<footer class="px-6">
    <p class="text-xs leading-5 text-gray-400">&copy; {{ \Carbon\Carbon::now()->format('Y') }} EventGuru. {{ __('messages.footer.copyright') }}</p>
    <ul>
        <li>
            <a href="{{ route('terms.show') }}">{{ __('messages.footer.link.terms') }}</a>
        </li>
        <li>
            <a href="{{ route('policy.show') }}">{{ __('messages.footer.link.policy') }}</a>
        </li>
    </ul>
</footer>
