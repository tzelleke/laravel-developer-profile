@props(['tabId'])

<button
  id="{{ $tabId }}-tab"
  {{-- blade-formatter-disable --}}
  {{ $attributes->class([
    'nav-link',
    'active' => $attributes->has(['active']),
    ])->except(['active']) }}
  {{-- blade-formatter-enable --}}
  data-bs-toggle="tab"
  data-bs-target="#{{ $tabId }}"
  type="button"
  role="tab"
  aria-controls="{{ $tabId }}"
  aria-selected="{{ $attributes->has('active') ? 'true' : 'false' }}"
>
  {{ $slot }}
</button>
