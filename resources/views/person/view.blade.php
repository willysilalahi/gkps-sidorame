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
                        <a href="{{ route('person_add') }}" class="btn btn-primary float-right mx-2"><i
                                class="bi bi-plus-lg"></i> Tambah</a>
                        <a href="{{ route('person_view_export') }}" class="btn btn-primary float-right"><i
                                class="bi bi-file-earmark-spreadsheet-fill"></i> Export</a>
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
                                @foreach ($persons as $i)
                                    <tr>
                                        <th scope="row" class="text-center"><small>{{ $loop->iteration }}</small>
                                        </th>
                                        <td><small>{{ $i->name }}</small></td>
                                        <td><small>{{ $i->categorial_text }}</small></td>
                                        <td><small>{{ $i->gender_text }}</small></td>
                                        <td><small>{{ $i->birth_text }}</small></td>
                                        <td class="text-center">
                                            <small>
                                                @if ($i->family != null)
                                                    {{ $i->family->sector->name }}
                                                @else
                                                    -
                                                @endif
                                            </small>
                                        </td>
                                        <td class="text-center">
                                            @if ($i->family != null)
                                                <a href="{{ route('family_view_detail', $i->family->id) }}"
                                                    target="_blank"><small>{{ $i->family->code }}</small></a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('person_view_detail', $i->id) }}"
                                                class="btn btn-sm btn-dark"><i class="bi bi-eye text-white"></i></a>
                                            <a href="{{ route('person_edit', $i->id) }}" class="btn btn-sm btn-dark"><i
                                                    class="bi bi-pencil"></i></a>
                                            <button onclick="deleteData({{ $i->id }})"
                                                class="btn btn-sm btn-danger" type="button"><i
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
<script>
    function deleteData(id) {
        swal({
                title: "Yakin gak?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: `/person/${id}`,
                        method: 'DELETE',
                        data: {
                            _token: CSRF_TOKEN
                        },
                        success: function(res, data) {
                            if (res.status == true) {
                                swal("Success", "Jemaat berhasil dihapus!", "success");
                                location.reload();
                            } else {
                                tata.error('Waduhhh', res.error);
                            }
                        },
                        error: function(error) {
                            tata.error('Ooopss', 'Waduhh ada yang salah!');
                        }
                    })
                } else {}
            });
    }
</script>
