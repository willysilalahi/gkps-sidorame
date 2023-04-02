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
                        <a href="" class="btn btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Seksi</th>
                                    <th scope="col" class="text-center">Jenis Kelamin</th>
                                    <th scope="col">T.Tanggal Lahir</th>
                                    <th scope="col">Sektor</th>
                                    <th scope="col" class="text-center">Kode Keluarga</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center"><small>1</small></th>
                                    <td><small>Sean Felix Girsang</small></td>
                                    <td><small>Namaposo</small></td>
                                    <td><small>Laki-laki</small></td>
                                    <td><small>Medan, 10 Oct 2006</small></td>
                                    <td class="text-center"><small>3</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S03-041</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center"><small>2</small></th>
                                    <td><small>Septian Gultom</small></td>
                                    <td><small>Namaposo</small></td>
                                    <td><small>Laki-laki</small></td>
                                    <td><small>Medan, 30 Jun 2003</small></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S02-074</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center"><small>3</small></th>
                                    <td><small>Henry Dunansyah Saragih</small></td>
                                    <td><small>Bapa</small></td>
                                    <td><small>Laki-laki</small></td>
                                    <td><small>Tebing Tinggi, 30 Jun 1973</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S01-002</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center"><small>4</small></th>
                                    <td><small>Tora Andriany Simamora</small></td>
                                    <td><small>Inang</small></td>
                                    <td><small>Perempuan</small></td>
                                    <td><small>Medan, 20 Des 1976</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S01-002</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center"><small>5</small></th>
                                    <td><small>Hennock Gitasari D Saragih</small></td>
                                    <td><small>Namaposo</small></td>
                                    <td><small>Perempuan</small></td>
                                    <td><small>Medan, 09 Des 2003</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S01-002</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button"><i
                                                class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center"><small>6</small></th>
                                    <td><small>Gabriel Nicholas D Saragih</small></td>
                                    <td><small>Namaposo</small></td>
                                    <td><small>Laki-laki</small></td>
                                    <td><small>Medan, 30 Apr 2005</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><a
                                            href="{{ route('family_view_detail', 1) }}"><small>S01-002</small></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('person_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="#" class="btn btn-sm btn-dark"><i
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
