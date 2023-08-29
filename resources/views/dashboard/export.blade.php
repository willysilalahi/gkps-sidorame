<table>
    <tr>
        <th style="font-weight: 900;margin:auto">NO</th>
        <th style="font-weight: 900;margin:auto">KETERANGAN</th>
        <th style="font-weight: 900;margin:auto">JUMLAH</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Jumlah Sektor</td>
        <td>{{ $sum_sector }}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jumlah Keluarga</td>
        <td>{{ $sum_family }}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Jumlah Jemaat</td>
        <td>{{ $sum_person }}</td>
    </tr>
    @foreach ($persons as $i)
        @if ($i->categorial == 1)
            <tr>
                <td>4</td>
                <td>Jumlah Seksi Bapa</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 2)
            <tr>
                <td>5</td>
                <td>Jumlah Seksi Inang</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 3)
            <tr>
                <td>6</td>
                <td>Jumlah Seksi Namaposo</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
        @if ($i->categorial == 4)
            <tr>
                <td>7</td>
                <td>Jumlah Seksi Sekolah Minggu</td>
                <td>{{ $i->total }}</td>
            </tr>
        @endif
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
    <tr>
        <td colspan="6" style="font-weight: 900;margin:auto">Berulang tahun dalam minggu ini ({{ $start_birthday }} -
            {{ $end_birthday }})</td>
    </tr>
    <tr>
        <th style="font-weight: 900;margin:auto">No</th>
        <th style="font-weight: 900;margin:auto">Nama</th>
        <th style="font-weight: 900;margin:auto">Kategorial Seksi</th>
        <th style="font-weight: 900;margin:auto">Sektor</th>
        <th style="font-weight: 900;margin:auto">Tanggal</th>
        <th style="font-weight: 900;margin:auto">Umur</th>
    </tr>
    @foreach ($birthday as $i)
        @php
            $tanggalLahir = new DateTime($i->date_of_birth);
            $today = new DateTime();
            $umur = $today->diff($tanggalLahir)->y;
        @endphp
        <tr>
            <th>{{ $loop->iteration }}</th>
            <th>{{ $i->name }}</th>
            <td>{{ $i->categorial_text }}</td>
            <td>{{ $i->sector_name }}</td>
            <td>{{ date('d F Y', strtotime($i->date_of_birth)) }}</td>
            <td>{{ $umur + 1 }} Tahun</td>
        </tr>
    @endforeach
</table>
