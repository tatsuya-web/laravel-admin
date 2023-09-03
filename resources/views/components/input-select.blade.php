<div class="input @if($errors->has($name)) -invalid @endif">
    <label class="input_ttl @if($required) -req @endif">{{ $title }}</label>
    <select @if($readonly) disabled @endif name="{{ $name }}">
        <option>選択してください</option>
        @foreach($options as $option)
        <option value="@if($key == '' && $show == ''){{ $option }}@else{{ $option->$key }}@endif"
            @if(($key == '' && $show == '' && $option == $value) || ($key != '' && $show != '' && $option->$key == $value)) selected @endif
        >@if($key == '' && $show == '') {{ $option }} @else {{ $option->$show }} @endif</option>
        @endforeach
    </select>
    @if($errors->has($name)) <div class="input_feedback">{{ $errors->first($name) }}</div> @endif
</div>