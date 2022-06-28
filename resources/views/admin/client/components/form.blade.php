<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    @isset($client->id)
                        #{{$client->id}}
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
                    <label for="inputName">First Name</label>
                    <input name="first_name" type="text" id="inputName" class="form-control" @isset($client->first_name)value="{{$client->first_name}}"@endisset>
                </div>
                <div class="form-group">
                    <label for="inputName">Last Name</label>
                    <input name="last_name" type="text" id="inputName" class="form-control" @isset($client->last_name)value="{{$client->last_name}}"@endisset>
                </div>
                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input name="email" type="email" id="inputName" class="form-control" @isset($client->email)value="{{$client->email}}"@endisset>
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
