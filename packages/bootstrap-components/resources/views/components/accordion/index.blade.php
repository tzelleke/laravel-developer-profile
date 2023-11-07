@props(['id'])

<div
  id="{{ $id }}"
  {{ $attributes->class(['accordion']) }}
>
  {{ $slot }}
</div>
