@extends('admin.main')

@section('content')
    <div class="w-12">
        <a class="btn btn-primary btn-sm w-8" href="{{route('client.create')}}">
            <i class="fa-solid fa-file-circle-plus">
            </i>
            Add Client
        </a>
    </div>
    <div class="card">

    </div>
    <div class="card-header">
        <h3 class="card-title"></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    First Name
                </th>
                <th style="width: 30%">
                    Last Name
                </th>
                <th style="width: 30%">
                    Email
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                @include('admin.client.components.item')
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $clients->links() !!}
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
