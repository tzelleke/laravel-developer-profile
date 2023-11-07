@aware(['id'])
@props(['itemId', 'open' => false])

<div class="accordion-item">
  <h2 class="accordion-header">
    <button
      @class(['accordion-button', 'collapsed' => !$open])
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#{{ $itemId }}"
      aria-expanded="false"
      aria-controls="{{ $itemId }}"
    >
      {{ $header }}
    </button>
  </h2>
  <div
    id="{{ $itemId }}"
    @class(['accordion-collapse', 'collapse', 'show' => $open])
    data-bs-parent="#{{ $id }}"
  >
    <div class="accordion-body">
      {{ $slot }}
    </div>
  </div>
</div>
