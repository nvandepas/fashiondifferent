@extends('master')

@section('title')
    {{ $element->name }} @ Fashion Different
@stop

@section('main')
	@include('flash::message')

	@include('partials.buttons.favourite')

    <h2>{{ $element->name }}</h2>
	<h3>{{ dd($element->author()->all()) }}</h3>
	<em>{{ $typeshop }}</em>
    <p>{!! nl2br(htmlspecialchars($element->description)) !!}</p>
	<img src="{{ '/uploads/element-images/cropsized/' . $element->image }}" alt="{{ $element->name }}" />
	<a id="comment-top" name="comment-top"></a>

	@include('partials.elements.comments')
@stop