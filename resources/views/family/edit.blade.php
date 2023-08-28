<main id="main" class="main">

    <div class="pagetitle">
        <h1>Keluarga</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Keluarga</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Keluarga</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" method="POST" action="{{ route('family_edit_patch', $family->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Sektor</label>
                                <select name="sectors_id" id="sectors_id" class="form-select" onchange="setCode()">
                                    @foreach ($sector as $i)
                                        <option value="{{ $i->id }}" data-last-code="{{ $i->family_last_code }}"
                                            @if ($family->sectors_id == $i->id) selected @endif>
                                            {{ $i->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Kode Keluarga</label>
                                <input type="hidden" id="base_code" value="{{ $family->code }}">
                                <input type="hidden" id="base_sectors_id" value="{{ $family->sectors_id }}">
                                <input type="text" readonly name="code" class="form-control" id="code"
                                    value="{{ $family->code }}">
                                @error('code')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Jenis Tangga</label>
                                <select name="type" class="form-select">
                                    <option value="1">Tangga Banggal</option>
                                    <option value="0">Tangga Etek</option>
                                </select>
                            </div>
                            <hr>
                            <div class="col-md-5">
                                <label for="inputAddress" class="form-label">Anggota Keluarga</label><br>
                                <select id="persons" class="js-example-basic-single" data-width="100%">
                                    @foreach ($persons as $i)
                                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                                    @endforeach
                                    @if (count($persons) == 0)
                                        <option value="">No Data</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-7">
                                <label for="inputAddress" class="form-label text-white">.</label><br>
                                <button class="btn btn-primary" type="button"
                                    @if (count($persons) > 0) onclick="addPerson()" @endif><i
                                        class="bi bi-plus-lg"></i></button>
                            </div>
                            <div class="col-12">
                                <!-- List group with custom content -->
                                <ol class="list-group list-group-numbered" id="person-list">
                                    @foreach ($family->persons as $i)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <input type="hidden" name="persons[]" value="{{ $i->id }}">
                                                <div class="fw-bold">{{ $i->name }}</div>
                                            </div>
                                            <span class="badge bg-danger rounded-pill"
                                                onclick="killMe(this, '{{ $i->id }}', '{{ $i->name }}')"
                                                style="cursor: pointer"><i class="bi bi-trash3"></i></span>
                                        </li>
                                    @endforeach
                                </ol><!-- End with custom content -->
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    function setCode() {
        var selectedOption = $('#sectors_id').find('option:selected');
        var dataValue = selectedOption.data('last-code');
        var dataId = selectedOption.val();
        var base_code = $('#base_code').val();
        var base_sectors_id = $('#base_sectors_id').val();

        if (dataId == base_sectors_id) {
            $('#code').val(base_code);
        } else {
            $('#code').val(dataValue);
        }
    }

    function killMe(el, id, name) {
        let element = el.parentElement;
        element.remove();
        $('#persons').append(
            `<option value="` + id + `">` + name + `</option>`
        );
    }

    function addPerson() {
        let name = $('#persons').find(':selected').text();
        let id = $('#persons').find(':selected').val();
        var personCount = $('#persons').children().length;
        if (personCount > 0) {
            $('#person-list').append(
                `<li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <input type="hidden" name="persons[]" value="` + id + `">
                    <div class="fw-bold">` + name + `</div>
                </div>
                <span class="badge bg-danger rounded-pill" onclick="killMe(this, '` + id + `', '` + name + `')"
                    style="cursor: pointer"><i class="bi bi-trash3"></i></span>
            </li>`
            );
            $('#persons option[value="' + id + '"]').remove();
        }
    }
</script>
