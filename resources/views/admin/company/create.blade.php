@extends('admin.main')

@section('content')
    <form action="{{route('company.store')}}" method="post">
        @method('POST')
        @csrf
        @include('admin.company.components.form')
    </form>
@endsection
