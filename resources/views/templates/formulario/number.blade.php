<label class="{{ $class ?? null }}">

    <span>{{ $label ?? $input ?? "ERRO" }}</span>
    {!! Form::number($input, $value ?? null) !!}

</label>