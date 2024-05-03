@extends('layout')

@section('content')
    <form-component></form-component>
    <landscape-component :toolsList="{{ json_encode($toolsList) }}"></landscape-component>
@endsection
