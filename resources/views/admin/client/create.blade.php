@extends('admin.main')

@section('content')
    <form action="{{route('client.store')}}" method="post">
        @method('POST')
        @csrf
        @include('admin.client.components.form')
    </form>
@endsection
