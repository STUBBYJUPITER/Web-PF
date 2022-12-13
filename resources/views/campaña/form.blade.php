<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $campaña->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre') }}
            {{ Form::text('tipo_sangre', $campaña->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Sangre']) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad_requerida') }}
            {{ Form::text('unidad_requerida', $campaña->unidad_requerida, ['class' => 'form-control' . ($errors->has('unidad_requerida') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Requerida']) }}
            {!! $errors->first('unidad_requerida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $campaña->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_campañas') }}
            {{ Form::text('nombre_campañas', $campaña->nombre_campañas, ['class' => 'form-control' . ($errors->has('nombre_campañas') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Campañas']) }}
            {!! $errors->first('nombre_campañas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id2') }}
            {{ Form::text('user_id2', $campaña->user_id2, ['class' => 'form-control' . ($errors->has('user_id2') ? ' is-invalid' : ''), 'placeholder' => 'User Id2']) }}
            {!! $errors->first('user_id2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>