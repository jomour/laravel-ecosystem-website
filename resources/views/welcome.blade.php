@extends('layout')

@section('content')
    <example-component :toolsList="{{ json_encode($toolsList) }}"></example-component>
@endsection

@extends('footer')
