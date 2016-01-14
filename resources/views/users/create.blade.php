<div class="container">
    <div class="row col-sm-12">
        {!! Form::open(['url' => 'user.store', 'method' => 'POST', ]) !!}

            <div class="form-group col-sm-6">
                {!! Form::label('name', 'Nombre' ) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('phone', 'Telefono' ) !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su telefono', 'required']) !!}
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('phone', 'NIT' ) !!}
                {!! Form::text('nit', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nit', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('birthday', 'Fecha de nacimiento' ) !!}
                {!! Form::date('birthday', \Carbon\Carbon::now(), ['class' => 'form-control', 'required'] ) !!}
            </div>

            <div class="form-group" style="text-align: right">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" id="saveUSer">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="cancelSave">Cancelar</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

