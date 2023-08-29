<main id="main" class="main">
    <div class="pagetitle">
        <a href="{{ route('dashboard_view_export') }}" class="btn btn-sm btn-dark px-3 float-end"><i
                class="bi bi-file-earmark-spreadsheet-fill"></i> Export</a>
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Sektor</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-pin-map"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $sum_sector }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Keluarga</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-box2-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $sum_family }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Jemaat</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $sum_person }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->
                </div>
            </div><!-- End Left side columns -->
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($persons as $i)
                        @if ($i->categorial == 1)
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Seksi Bapa</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $i->total }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif

                        @if ($i->categorial == 2)
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Seksi Inang</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $i->total }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif

                        @if ($i->categorial == 3)
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Seksi Namaposo</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $i->total }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif

                        @if ($i->categorial == 4)
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card person-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Seksi S.Minggu</h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{ $i->total }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div><!-- End Left side columns -->

        </div>
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Ulang Tahun Dalam Minggu Ini
                                    {{ '(' . $start_birthday . ' - ' . $end_birthday . ')' }} <i
                                        class="bi bi-balloon"></i></h5>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kategorial Seksi</th>
                                            <th scope="col">Sektor</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Umur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($birthday as $i)
                                            @php
                                                $tanggalLahir = new DateTime($i->date_of_birth);
                                                $today = new DateTime();
                                                $umur = $today->diff($tanggalLahir)->y;
                                            @endphp
                                            <tr>
                                                <th scope="row"><a href="{{ route('person_view_detail', $i->id) }}"
                                                        target="_blank">{{ $i->name }}</a></th>
                                                <td>{{ $i->categorial_text }}</td>
                                                <td>{{ $i->family != null ? $i->family->sector->name : '-' }}</td>
                                                <td>{{ date('d F Y', strtotime($i->date_of_birth)) }}</td>
                                                <td class="fw-bold">{{ $umur + 1 }} Tahun</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->
