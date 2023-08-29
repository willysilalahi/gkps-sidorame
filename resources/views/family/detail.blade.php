 <main id="main" class="main">
     <div class="pagetitle">
         <h1>Keluarga</h1>
         <nav>
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                 <li class="breadcrumb-item">Keluarga</li>
                 <li class="breadcrumb-item active">Detail</li>
             </ol>
         </nav>
     </div><!-- End Page Title -->
     <section class="section">
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Detail Keluarga</h5>

                         <!-- Vertical Form -->
                         <form class="row g-3">
                             <div class="col-12">
                                 <label><small><strong>Kode Keluarga</strong></small></label>
                                 <p>{{ $family->code }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Sektor</strong></small></label>
                                 <p>{{ $family->sector->name }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Jenis Tangga</strong></small></label>
                                 <p>{{ $family->type == 1 ? 'Tangga Banggal' : 'Tangga Etek' }}</p>
                             </div>
                             <div class="col-12 mt-0">
                                 <label><small><strong>Anggota Keluarga</strong></small></label>
                                 <div class="row mt-3">
                                     <div class="col-md-12">
                                         <!-- Small tables -->
                                         <table class="table table-sm table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th scope="col"><small>No</small></th>
                                                     <th scope="col"><small>Nama</small></th>
                                                     <th scope="col"><small>Seksi</small></th>
                                                     <th scope="col"><small>Jenis Kelamin</small></th>
                                                     <th scope="col"><small>T.Tanggal Lahir</small></th>
                                                     <th scope="col" class="text-center"><small>Status Baptis</small>
                                                     </th>
                                                     <th scope="col" class="text-center"><small>Status Sidi</small>
                                                     </th>
                                                     <th scope="col" class="text-center"><small>Status
                                                             Menikah</small></th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($family->persons as $i)
                                                     <tr>
                                                         <th scope="row" class="text-center">
                                                             <small>{{ $loop->iteration }}</small>
                                                         </th>
                                                         <td><small>{{ $i->name }}</small></td>
                                                         <td><small>{{ $i->categorial_text }}</small></td>
                                                         <td><small>{{ $i->gender_text }}</small></td>
                                                         <td><small>{{ $i->place_of_birth }},
                                                                 {{ date('d F Y', strtotime($i->date_of_birth)) }}</small>
                                                         </td>
                                                         <td class="text-center">
                                                             <small>
                                                                 @if ($i->baptis != null)
                                                                     @if ($i->baptis == 1)
                                                                         <i
                                                                             class="bi bi-check-circle-fill text-success"></i>
                                                                         {{ $i->date_of_baptis != null ? date('(d F Y)', strtotime($i->date_of_baptis)) : '' }}
                                                                     @else($i->baptis == 0)
                                                                         <i class="bi bi-clock-fill text-secondary"></i>
                                                                     @endif
                                                                 @endif
                                                                 <br>
                                                             </small>
                                                         </td>
                                                         <td class="text-center">
                                                             <small>
                                                                 @if ($i->sidi != null)
                                                                     @if ($i->sidi)
                                                                         <i
                                                                             class="bi bi-check-circle-fill text-success"></i>
                                                                         {{ $i->date_of_sidi != null ? date('(d F Y)', strtotime($i->date_of_sidi)) : '' }}
                                                                     @else
                                                                         <i class="bi bi-clock-fill text-secondary"></i>
                                                                     @endif
                                                                 @endif
                                                                 <br>
                                                             </small>
                                                         </td>
                                                         <td class="text-center">
                                                             @if ($i->date_of_wedding != null)
                                                                 <small><i
                                                                         class="bi bi-check-circle-fill text-success"></i><br>
                                                                     ({{ date('d F Y', strtotime($i->date_of_wedding)) }})
                                                                 </small>
                                                             @endif
                                                         </td>
                                                     </tr>
                                                 @endforeach
                                             </tbody>
                                         </table>
                                         <!-- End small tables -->
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <a href="{{ route('family_view') }}" class="btn btn-secondary">Back</a>
                             </div>
                         </form><!-- Vertical Form -->

                     </div>
                 </div>
             </div>
         </div>
     </section>

 </main><!-- End #main -->
