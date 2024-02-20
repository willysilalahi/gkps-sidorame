<main id="main" class="main">

    <div class="pagetitle">
        <h1>Jemaat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Jemaat</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Jemaat</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" method="POST" action="{{ route('person_add_post') }}">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="gender" class="form-select">
                                    <option value="1">Laki-Laki</option>
                                    <option value="0">Perempuan</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="place_of_birth" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status Baptis</label>
                                <select name="baptis" class="form-select">
                                    <option value="">Pilih</option>
                                    <option value="1">Sudah Baptis</option>
                                    <option value="0">Belum Baptis</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Baptis</label>
                                <input type="date" name="date_of_baptis" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status Sidi</label>
                                <select name="sidi" class="form-select">
                                    <option value="">Pilih</option>
                                    <option value="1">Sudah Sidi</option>
                                    <option value="0">Belum Sidi</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Sidi</label>
                                <input type="date" name="date_of_sidi" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Pernikahan</label>
                                <input type="date" name="date_of_wedding" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Kategorial</label>
                                <select name="categorial" class="form-select">
                                    <option value="1">Seksi Bapa</option>
                                    <option value="2">Seksi Inang</option>
                                    <option value="3">Seksi Namaposo</option>
                                    <option value="4">Seksi Sekolah Minggu</option>
                                </select>
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
