<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{ Helper::changeRouteName()['name'] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ Helper::changeRouteName()['name'] }}</li>
            </ol>
        </nav>
        <x-alert></x-alert>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Sektor</th>
                                    <th scope="col" class="text-center">Jlh Keluarga</th>
                                    <th scope="col" class="text-center">Jlh Jemaat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sector as $i)
                                    <tr>
                                        <th scope="row"><small>{{ $loop->iteration }}</small></th>
                                        <td><small>{{ $i->name }}</small></td>
                                        <td class="text-center"><small>{{ count($i->family) . ' Keluarga' }}</small>
                                        </td>
                                        <td class="text-center"><small>{{ $i->total_person . ' Orang' }}</small></td>
                                        <td>
                                            <a href="{{ route('sector_view_detail', $i->id) }}"
                                                class="btn btn-sm btn-dark"><i class="bi bi-eye text-white"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
