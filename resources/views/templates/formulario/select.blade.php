<div class='{{ $class ?? null }}'>
    <label for="{{ $for ?? null }}">{{ $label ?? $select ?? "ERRO" }}</label>
        {!! Form::select($select, $data ?? [], $value ?? null, $attributes) !!}
    
</div>