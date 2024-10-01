<textarea {{ $attributes->merge(['class' => 'form-control', 'rows' => 5]) }}>
    {{ $slot }}
</textarea>