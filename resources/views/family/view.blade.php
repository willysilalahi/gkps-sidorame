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
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Keluarga</th>
                                    <th scope="col">Sektor</th>
                                    <th scope="col">Jlh Anggota</th>
                                    <th scope="col">Jenis Tangga</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>S01-001</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>Tangga Baggal</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>S01-002</td>
                                    <td>1</td>
                                    <td>6</td>
                                    <td>Tangga Baggal</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>S02-001</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>Tangga Baggal</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>S02-002</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>Tangga Etek</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>S03-001</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>Tangga Baggal</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>S03-002</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>Tangga Etek</td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"><i
                                                class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->
