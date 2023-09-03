<div class="input @if($errors->has($name)) -invalid @endif">
    <label class="input_ttl @if($required) -req @endif">{{ $title }}</label>
    <textarea name="{{ $name }}" @if($readonly) readonly @endif placeholder="{{ $placeholder }}">{{ $value }}</textarea>
    @if($errors->has($name)) <div class="input_feedback">{{ $errors->first($name) }}</div> @endif
</div>