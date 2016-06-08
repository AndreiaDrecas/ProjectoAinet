
 <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price_cents', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tradepref', 'Trade Preference:') !!}
        {!! Form::text('trade_prefs', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantity', 'Quantity:') !!}
        {!! Form::text('quantity', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('available_on', 'Available on:') !!}
        {!! Form::input('date', 'available_on', date('Y-m-d'),['class' => 'form-control']) !!}
    </div>

    <div class="form-inline">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control'] ) !!}
        <a class="btn btn-danger" href="{{url('advertisements')}}">Cancel</a>
    </div>