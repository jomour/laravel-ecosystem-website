@extends('layout')

@section('content')
    <landscape-component :toolsList="{{ json_encode($toolsList) }}"></landscape-component>
@endsection
