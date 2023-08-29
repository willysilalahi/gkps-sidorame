<table>
    @foreach ($family as $fam)
        <tr>
            <th></th>
            <th style="font-weight: 900;margin:auto">KODE KELUARGA</th>
            <th style="font-weight: 900;margin:auto">{{ $fam->code }}</th>
        </tr>
        <tr>
            <th></th>
            <th style="font-weight: 900;margin:auto">JENIS TANGGA</th>
            <th style="font-weight: 900;margin:auto">{{ $fam->type == 1 ? 'Tangga Banggal' : 'Tangga Etek' }}</th>
        </tr>
        <tr>
            <th style="font-weight: 900;margin:auto">NO</th>
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
        @foreach ($fam->persons as $i)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->gender_text }}</td>
                <td>{{ $i->birth_text }}</td>
                <td>{{ $i->categorial_text }}</td>
                <td>{{ $i->baptis == 1 ? 'Sudah Baptis' : 'Belum Baptis' }}</td>
                <td>{{ $i->sidi == 1 ? 'Sudah Sidi' : 'Belum Sidi' }}</td>
                <td>{{ $i->baptis_date_format }}</td>
                <td>{{ $i->sidi_date_format }}</td>
                <td>{{ $i->wedding_date_format }}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
</table>
