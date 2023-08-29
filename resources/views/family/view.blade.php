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
                        <a href="{{ route('family_add') }}" class="btn btn-primary float-right mx-2"><i
                                class="bi bi-plus-lg"></i> Tambah</a>
                        <a href="{{ route('family_view_export') }}" class="btn btn-primary float-right"><i
                                class="bi bi-file-earmark-spreadsheet-fill"></i> Export</a>
                    </div>
                    <div class="card-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Keluarga</th>
                                    <th scope="col">Anggota I</th>
                                    <th scope="col" class="text-center">Sektor</th>
                                    <th scope="col" class="text-center">Jlh Anggota</th>
                                    <th scope="col">Jenis Tangga</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($family as $i)
                                    <tr>
                                        <th scope="row"><small>{{ $loop->iteration }}</small></th>
                                        <td><small>{{ $i->code }}</small></td>
                                        <td><small>{{ count($i->persons) > 0 ? $i->persons[0]->name : '-' }}</small>
                                        </td>
                                        <td class="text-center"><small>{{ $i->sectors_id }}</small></td>
                                        <td class="text-center"><small>{{ count($i->persons) }}</small></td>
                                        <td><small>{{ $i->type == 1 ? 'Tangga Banggal' : 'Tangga Etek' }}</small></td>
                                        <td>
                                            <a href="{{ route('family_view_detail', $i->id) }}"
                                                class="btn btn-sm btn-dark"><i class="bi bi-eye text-white"></i></a>
                                            <a href="{{ route('family_edit', $i->id) }}" class="btn btn-sm btn-dark"><i
                                                    class="bi bi-pencil"></i></a>
                                            <button class="btn btn-sm btn-danger" type="button"><i
                                                    class="bi bi-trash3"></i></button>
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
