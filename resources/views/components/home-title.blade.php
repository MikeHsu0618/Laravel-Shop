@props(['value'])

<div {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $test ?? $value }}
</div>
