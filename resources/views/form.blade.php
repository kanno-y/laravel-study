@extends('layouts.default')

@section('title', 'GETフォーム')
@section('content')
    <form action="/query-strings" method="GET">
		<Label>キーワード<input type="text" name="keyword"></Label>
		<button type="submit">送信</button>
	</form>
@endsection