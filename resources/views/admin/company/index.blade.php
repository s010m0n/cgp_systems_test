@extends('admin.main')

@section('content')
<div class="w-12">
    <a class="btn btn-primary btn-sm w-8" href="{{route('company.create')}}">
        <i class="fa-solid fa-plus-large">
        </i>
        Add Company
    </a>
</div>
<div class="card">

    </div>
    <div class="card-header">

        <h3 class="card-title">Companies</h3>


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
                    Company Name
                </th>
                <th style="width: 30%">
                    Description
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                @include('admin.company.components.item')
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
