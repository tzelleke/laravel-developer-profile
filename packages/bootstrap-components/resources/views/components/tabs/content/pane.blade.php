@props(['tabId'])

<div
  id="{{ $tabId }}"
  {{-- blade-formatter-disable --}}
  {{ $attributes->class([
    'tab-pane',
    'fade',
    'show' => $attributes->has(['active']),
    'active' => $attributes->has(['active']),
    ])->except(['active']) }}
  {{-- blade-formatter-enable --}}
  role="tabpanel"
  aria-labelledby="{{ $tabId }}-tab"
  tabindex="0"
>
  {{ $slot }}
</div>
