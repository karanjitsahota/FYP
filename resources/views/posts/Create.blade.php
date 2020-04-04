@extends ('layouts.app')
@section('content')
    <h1>Write your review</h1>
    <br>
    
    {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}

    <div class= "form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'] )}}
    </div>
    <div class= "form-group">
            {{Form::label('body', 'Review')}}
            {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Review'] )}}
        </div>
    {{Form::Submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection