@props(['active'])

@php
$classes = ($active ?? false)
            ? 'breadcrumb-item text-muted'
            : 'breadcrumb-item text-muted text-hover-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
