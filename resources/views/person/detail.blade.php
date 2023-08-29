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
                                 <p>
                                     @if ($person->family != null)
                                         <a href="{{ route('family_view_detail', $person->family->id) }}"
                                             target="_blank">{{ $person->family->code }}</a>
                                     @else
                                         -
                                     @endif
                                 </p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Sektor</strong></small></label>
                                 <p>
                                     @if ($person->family != null)
                                         {{ $person->family->sector->name }}
                                     @else
                                         -
                                     @endif
                                 </p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Nama</strong></small></label>
                                 <p>{{ $person->name }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Seksi</strong></small></label>
                                 <p>{{ $person->categorial_text }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Jenis Kelamin</strong></small></label>
                                 <p>{{ $person->gender_text }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Tempat Tanggal Lahir</strong></small></label>
                                 <p>{{ $person->birth_text }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Baptis</strong></small></label>
                                 <p>
                                     {{ $person->status_baptis }}
                                     @if ($person->baptis)
                                         {{ $person->date_of_baptis != null ? date('(d F Y)', strtotime($person->date_of_baptis)) : '' }}
                                     @endif
                                 </p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Sidi</strong></small></label>
                                 <p>
                                     {{ $person->status_sidi }}
                                     @if ($person->sidi)
                                         {{ $person->date_of_sidi != null ? date('(d F Y)', strtotime($person->date_of_sidi)) : '' }}
                                     @endif
                                 </p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Status Menikah</strong></small></label>
                                 <p>
                                     @if ($person->date_of_wedding != null)
                                         Sudah Menikah
                                         ({{ date('d F Y', strtotime($person->date_of_wedding)) }})
                                     @else
                                         -
                                     @endif
                                 </p>
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
