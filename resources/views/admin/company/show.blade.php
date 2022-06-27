@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company Name</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    {{$company->name}}
                </div>

            </div>
            @if($company->desc)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company Description</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    {{$company->desc}}
                </div>
            </div>
            @endif
            <!-- /.card -->
        </div>
    </div>
@endsection
