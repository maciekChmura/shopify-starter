@extends('shopify-app::layouts.default')

@section('content')
    <p>Hello worlds</p>
@endsection

@section('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
