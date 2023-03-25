<!-- Table with stripped rows -->
<table class="table table-striped">
    <thead>
        <tr>
            <th width="40%">Menu</th>
            @foreach ($type as $i)
                @if ($loop->last)
                    <th width="15%" class="text-center">{{ ucwords($i->name) }}</th>
                @else
                    <th width="15%" class="text-center">{{ ucwords($i->name) }}</th>
                @endif
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($menu as $m)
            <tr>
                <td>{{ $m->name }}</td>
                @foreach ($type as $i)
                    @if ($loop->last)
                        <td>
                            <input class="toast-top-center" type="checkbox" name="menu_tipe[]"
                                value="{{ $m->id . '_' . $i->id }}"
                                @foreach ($authorization as $j) @if ($j->menus_id . '_' . $j->authorization_types_id == $m->id . '_' . $i->id)
                        checked @else @endif @endforeach>
                        </td>
                    @else
                        <td>
                            <input class="toast-top-center" type="checkbox" name="menu_tipe[]"
                                value="{{ $m->id . '_' . $i->id }}"
                                @foreach ($authorization as $j) @if ($j->menus_id . '_' . $j->authorization_types_id == $m->id . '_' . $i->id)
                        checked @else @endif @endforeach>
                        </td>
                    @endif
                @endforeach
        @endforeach
        </tr>
    </tbody>
</table>
