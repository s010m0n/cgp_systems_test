<tr>
    <td>
        {{$client->id}}
    </td>
    <td>
        <a>
            {{$client->first_name}}
        </a>
        <br>
    </td>
    <td>
        <a>
            {{$client->last_name}}
        </a>
        <br>
    </td>
    <td>
        <a>
            {{$client->email}}
        </a>
        <br>
    </td>
    <td class="project-actions text-right">
        <a class="btn btn-primary btn-sm" href="{{route('client.show', $client->id)}}">
            <i class="fas fa-folder">
            </i>
            View
        </a>
        <a class="btn btn-info btn-sm" href="{{route('client.edit', $client->id)}}">
            <i class="fas fa-pencil-alt">
            </i>
            Edit
        </a>
        <a class="btn btn-danger btn-sm" href="{{route('client.delete', $client->id)}}">
            <i class="fas fa-trash">
            </i>
            Delete
        </a>
    </td>
</tr>
