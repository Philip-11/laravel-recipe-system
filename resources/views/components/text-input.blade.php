<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <input type="text"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
    >

    @error($name)
        <span>{{ $message }}</span>
    @enderror
</div>