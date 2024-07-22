<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label {{ $required }}">{{ $label }}</label>
    <textarea name="{{ $name }}" class="form-control" id="{{ $id }}" {{ $required }}>{{ $value }}</textarea>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
