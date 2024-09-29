@props(['name'])

@error($name)
    <p class="alert alert-warning fs-6 "> {{ $message }} </p>
@enderror