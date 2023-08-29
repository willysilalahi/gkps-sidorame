<table>
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2" style="font-weight: 900;margin:auto">Rekapitulasi Jumlah Kuria {{ $sector->name }}</td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    @foreach ($gender as $i)
        @if ($i->gender == 1)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Laki-Laki</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->gender == 0)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Perempuan</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
    @endforeach
    <tr>
        <td></td>
        <td style="font-weight: 900;margin:auto">Jumlah Jiwa</td>
        <td>{{ $jiwa }}</td>
    </tr>
    @foreach ($tangga as $i)
        @if ($i->type == 1)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Tangga Banggal</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->type == 0)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Tangga Etek</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
    @endforeach
    <tr>
        <td></td>
        <td style="font-weight: 900;margin:auto">Jumlah Keluarga</td>
        <td>{{ $keluarga }}</td>
    </tr>
    @foreach ($seksi as $i)
        @if ($i->categorial == 1)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Seksi Bapa</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 2)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Seksi Inang</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 3)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Seksi Namaposo</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 4)
            <tr>
                <td></td>
                <td style="font-weight: 900;margin:auto">Seksi Sekolah Minggu</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
    @endforeach
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>

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
                <td>{{ $i->status_baptis }}</td>
                <td>{{ $i->status_sidi }}</td>
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
