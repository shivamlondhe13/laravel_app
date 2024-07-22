<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label {{ $required }}">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" value="{{ $value }}"
        name="{{ $name }}" {{ $required }}>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
