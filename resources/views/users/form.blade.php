
 <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('profile_url', 'Profile URL:') !!}
        {!! Form::text('profile_url', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('profile_photo', 'Profile Photo:') !!}
        {!! Form::text('profile_photo', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('presentation', 'Presentation:') !!}
        {!! Form::text('presentation', null,['class' => 'form-control']) !!}
    </div>
    
     <div class="form-inline">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control'] ) !!}
        <a class="btn btn-danger" href="{{url('/')}}">Cancel</a>
    </div>