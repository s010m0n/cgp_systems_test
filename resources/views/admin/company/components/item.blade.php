<tr>
    <td>
        {{$company->id}}
    </td>
    <td>
        <a>
            {{$company->name}}
        </a>
        <br>
    </td>
    <td>
        <a>
            {{$company->desc}}
        </a>
        <br>
    </td>
    <td class="project-actions text-right">
        <a class="btn btn-primary btn-sm" href="{{route('company.show', $company->id)}}">
            <i class="fas fa-folder">
            </i>
            View
        </a>
        <a class="btn btn-info btn-sm" href="{{route('company.edit', $company->id)}}">
            <i class="fas fa-pencil-alt">
            </i>
            Edit
        </a>
        <a class="btn btn-danger btn-sm" href="{{route('company.delete', $company->id)}}">
            <i class="fas fa-trash">
            </i>
            Delete
        </a>
    </td>
</tr>
