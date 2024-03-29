<table>
    <tr>
        <th style="font-weight: 900;margin:auto">NO</th>
        <th style="font-weight: 900;margin:auto">SEKTOR</th>
        <th style="font-weight: 900;margin:auto">NAMA</th>
        <th style="font-weight: 900;margin:auto">JENIS KELAMIN</th>
        <th style="font-weight: 900;margin:auto">TEMPAT TANGGAL LAHIR</th>
        <th style="font-weight: 900;margin:auto">KATEGORIAL</th>
        <th style="font-weight: 900;margin:auto">STATUS BAPTIS</th>
        <th style="font-weight: 900;margin:auto">STATUS SIDI</th>
        <th style="font-weight: 900;margin:auto">TANGGAL BAPTIS</th>
        <th style="font-weight: 900;margin:auto">TANGGAL SIDI</th>
        <th style="font-weight: 900;margin:auto">TANGGAL PERNIKAHAN</th>
    </tr>
    @foreach ($person as $i)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $i->sector_name }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->gender_text }}</td>
            <td>{{ $i->birth_text }}</td>
            <td>{{ $i->categorial_text }}</td>
            <td>{{ $i->status_baptis }}</td>
            <td>{{ $i->status_sidi }}</td>
            <td>{{ $i->baptis_date_format }}</td>
            <td>{{ $i->sidi_date_format }}</td>
            <td>{{ $i->wedding_date_format }}</td>
        </tr>
    @endforeach
</table>
