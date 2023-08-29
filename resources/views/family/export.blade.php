<table>
    <tr>
        <th style="font-weight: 900;margin:auto">NO</th>
        <th style="font-weight: 900;margin:auto">SEKTOR</th>
        <th style="font-weight: 900;margin:auto">KODE KELUARGA</th>
        <th style="font-weight: 900;margin:auto">JENIS TANGGA</th>
        <th style="font-weight: 900;margin:auto">JUMLAH ANGGOTA</th>
        <th style="font-weight: 900;margin:auto">ANGGOTA</th>
    </tr>
    @foreach ($family as $i)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $i->sector_name }}</td>
            <td>{{ $i->code }}</td>
            <td>{{ $i->type == 1 ? 'Tangga Banggal' : 'Tangga Etek' }}</td>
            <td>{{ count($i->persons) }} Orang</td>
            <td>
                @foreach ($i->persons as $j)
                    @if ($loop->last && count($i->persons) > 1)
                        {{ $j->name }}
                    @else
                        @if (count($i->persons) > 1)
                            {{ $j->name . ', ' }}
                        @else
                            {{ $j->name }}
                        @endif
                    @endif
                @endforeach
            </td>
        </tr>
    @endforeach
</table>
