<div class="input @if($errors->has($name)) -invalid @endif">
    <label class="input_ttl @if($required) -req @endif">{{ $title }}</label>
    <input type="text" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" @if($readonly) readonly @endif>
    @if($errors->has($name))<div class="input_feedback">{{ $errors->first($name) }}</div>@endif
</div>