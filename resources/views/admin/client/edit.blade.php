@extends('admin.main')

@section('content')
    <form action="{{route('client.update', $client->id)}}" method="post">
        @method('PATCH')
        @csrf
        @include('admin.client.components.form')
    </form>
@endsection
