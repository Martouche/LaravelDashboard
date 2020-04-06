<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'Run Sheet') class="active " @endif>
                <a href="{{ route('runsheet') }}">
                    <i class="tim-icons icon-trophy"></i>
                    <p>{{ __('Run Sheet') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'Setup Sheet') class="active " @endif>
                <a href="{{ route('setupsheet') }}">
                    <i class="tim-icons icon-settings-gear-63"></i>
                    <p>{{ __('Setup Sheet') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'Stats Sheet') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Stats Sheet') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
