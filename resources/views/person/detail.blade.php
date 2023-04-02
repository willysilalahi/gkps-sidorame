 <main id="main" class="main">

     <div class="pagetitle">
         <h1>Jemaat</h1>
         <nav>
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                 <li class="breadcrumb-item">Jemaat</li>
                 <li class="breadcrumb-item active">Detail</li>
             </ol>
         </nav>
     </div><!-- End Page Title -->
     <section class="section">
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Detail Jemaat</h5>

                         <!-- Vertical Form -->
                         <form class="row g-3">
                             <div class="col-12">
                                 <label><small><strong>Kode Keluarga</strong></small></label>
                                 <p><a href="{{ route('family_view_detail', 1) }}">S01-002</a></p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Sektor</strong></small></label>
                                 <p>Sektor 1</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Nama</strong></small></label>
                                 <p>Henry Dunansyah Saragih</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Seksi</strong></small></label>
                                 <p>Seksi Bapa</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Jenis Kelamin</strong></small></label>
                                 <p>Laki-Laki</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>T. Tanggal Lahir</strong></small></label>
                                 <p>Tebing Tinggi, 30 Jun 1973</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Baptis</strong></small></label>
                                 <p>Sudah Baptis (26 Des 1973)</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Sidi</strong></small></label>
                                 <p>Sudah Baptis (26 Des 1990)</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Menikah</strong></small></label>
                                 <p>Sudah Baptis (27 Des 2002)</p>
                             </div>
                             <div>
                                 <a href="{{ route('person_view') }}" class="btn btn-secondary">Back</a>
                             </div>
                         </form><!-- Vertical Form -->

                     </div>
                 </div>
             </div>
         </div>
     </section>

 </main><!-- End #main -->
