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
                        @add_access
                            <a href="" class="btn btn-primary float-right">Tambah</a>
                        @endadd_access
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Keluarga</th>
                                    <th scope="col" class="text-center">Sektor</th>
                                    <th scope="col" class="text-center">Jlh Anggota</th>
                                    <th scope="col">Jenis Tangga</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><small>1</small></th>
                                    <td><small>S01-001</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><small>4</small></td>
                                    <td><small>Tangga Baggal</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><small>2</small></th>
                                    <td><small>S01-002</small></td>
                                    <td class="text-center"><small>1</small></td>
                                    <td class="text-center"><small>6</small></td>
                                    <td><small>Tangga Baggal</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><small>3</small></th>
                                    <td><small>S02-001</small></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td class="text-center"><small>4</small></td>
                                    <td><small>Tangga Baggal</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><small>4</small></th>
                                    <td><small>S02-002</small></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td class="text-center"><small>2</small></td>
                                    <td><small>Tangga Etek</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><small>5</small></th>
                                    <td><small>S03-001</small></td>
                                    <td class="text-center"><small>3</small></td>
                                    <td class="text-center"><small>4</small></td>
                                    <td><small>Tangga Baggal</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><small>6</small></th>
                                    <td><small>S03-002</small></td>
                                    <td class="text-center"><small>3</small></td>
                                    <td class="text-center"><small>6</small></td>
                                    <td><small>Tangga Etek</small></td>
                                    <td>
                                        <a href="{{ route('family_view_detail', 1) }}" class="btn btn-sm btn-dark"><i
                                                class="bi bi-eye text-white"></i></a>
                                        @edit_access
                                            <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-pencil"></i></a>
                                        @endedit_access
                                        @delete_access
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
                                        @enddelete_access
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
