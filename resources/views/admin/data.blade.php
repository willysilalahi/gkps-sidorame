<!-- Table with stripped rows -->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admin as $x => $i)
            <tr>
                <th scope="row">{{ $x + $admin->firstitem() }}</th>
                <td>{{ $i->name }}</td>
                <td>{{ $i->username }}</td>
                <td>{{ $i->role->name }}</td>
                <td>{{ $i->is_active == 1 ? 'Active' : 'Non-Active' }}</td>
                <td>
                    @edit_access
                        <a href="{{ route('admin_edit', $i->id) }}" class="btn btn-sm btn-secondary"><i
                                class="bi bi-pencil-square"></i></a>
                    @endedit_access
                    @delete_access
                        <button type="button" onclick="deleteData({{ $i->id }})"
                            class="btn btn-sm btn-secondary mx-2"><i class="bi bi-trash3"></i></button>
                    @enddelete_access
                </td>
            </tr>
        @endforeach
        @if (count($admin) == 0)
            <tr>
                <td class="text-center" colspan="4">No Data</td>
            </tr>
        @endif
    </tbody>
</table>
@if (count($admin) > 0)
    {{ $admin->links() }}
@endif
<!-- End Table with stripped rows -->
