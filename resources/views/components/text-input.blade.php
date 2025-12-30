@props(['name', 'label', 'type'])
<div class="form-group">
    <label for="{{ $name }}" class="label">{{ $label }} {{ $attributes->has('required') ? '*' : '' }}</label>

    <input type="text"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        class="input"
        {{ $attributes }}
    >

    @error($name)
        <span>{{ $message }}</span>
    @enderror
</div>