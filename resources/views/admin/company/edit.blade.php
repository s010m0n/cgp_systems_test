@extends('admin.main')

@section('content')
    <form action="{{route('company.update', $company->id)}}" method="post">
        @method('PATCH')
        @csrf
        @include('admin.company.components.form')
    </form>
@endsection
