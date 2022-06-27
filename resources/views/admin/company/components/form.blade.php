<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    @isset($company->id)
                        #{{$company->id}}
                    @endisset
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Company Name</label>
                    <input name="name" type="text" id="inputName" class="form-control" @isset($company->name)value="{{$company->name}}"@endisset>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Company Description</label>
                    <textarea name="desc" id="inputDescription" class="form-control" rows="4">@isset($company->name){{$company->desc}}@endisset</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{redirect()->back()}}" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Save Changes" class="btn btn-success float-right">
    </div>
</div>
