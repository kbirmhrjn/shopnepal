@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            @foreach($product->questions as $question)
                <div class="form-group">
                    {{Form::label('title', "$question->title:")}}
                    {{Form::text('question-' . $question->id,null,['class'=>'form-control'])}}
                </div>
            @endforeach
        </div>
    </div>
@stop