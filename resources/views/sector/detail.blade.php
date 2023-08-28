 <main id="main" class="main">

     <div class="pagetitle">
         <h1>Sektor</h1>
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
                         <h5 class="card-title">Semua Keluarga &emsp; <a href=""
                                 class="btn btn-sm btn-dark">Export</a>
                         </h5>
                         <!-- Vertical Form -->
                         <form class="row g-3">
                             @foreach ($sector->family as $i)
                                 <div class="col-12" style="font-size:13px !important">
                                     <table class="mb-2">
                                         <tr>
                                             <th width="20%">Kode Keluarga</th>
                                             <td><strong>&emsp;:</strong> {{ $i->code }}</td>
                                         </tr>
                                         <tr>
                                             <th width="20%">Jenis Tangga</th>
                                             <td><strong>&emsp;:</strong>
                                                 {{ $i->type == 1 ? 'Tangga Banggal' : 'Tangga Etek' }}</td>
                                         </tr>
                                     </table>
                                     <table style="width:100%">
                                         <tr>
                                             <th>No</th>
                                             <th>Nama</th>
                                             <th>Jenis Kelamin</th>
                                             <th>Tempat, Tgl Lahir</th>
                                             <th>Kategorial</th>
                                             <th>Baptis</th>
                                             <th>Sidi</th>
                                             <th>Tgl Pernikahan</th>
                                         </tr>
                                         @if (count($i->persons) == 0)
                                             <tr>
                                                 <td colspan="8" class="text-center">Tidak ada data keluarga</td>
                                             </tr>
                                         @endif
                                         @foreach ($i->persons as $j)
                                             <tr>
                                                 <td>{{ $j->categorial }}</td>
                                                 <td>{{ $j->name }}</td>
                                                 <td>{{ $j->gender == 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                                                 <td>{{ $j->place_of_birth != null ? $j->place_of_birth . ', ' : '' }}
                                                     {{ $j->date_of_birth != null ? date('d M Y', strtotime($j->date_of_birth)) : '' }}
                                                 </td>
                                                 <td>{{ $j->categorial_text }}</td>
                                                 <td>
                                                     @if ($j->baptis == 1)
                                                         <small><i
                                                                 class="bi bi-check-circle-fill text-success"></i></small>
                                                         {{ $j->date_of_baptis != null ? date('d M Y', strtotime($j->date_of_baptis)) : '' }}
                                                     @else
                                                         <small><i class="bi bi-clock-fill text-secondary"></i></small>
                                                     @endif
                                                 </td>
                                                 <td>
                                                     @if ($j->sidi == 1)
                                                         <small><i
                                                                 class="bi bi-check-circle-fill text-success"></i></small>
                                                         {{ $j->date_of_sidi != null ? date('d M Y', strtotime($j->date_of_sidi)) : '' }}
                                                     @else
                                                         <small><i class="bi bi-clock-fill text-secondary"></i></small>
                                                     @endif
                                                 </td>
                                                 <td>{{ $j->date_of_wedding != null ? date('d M Y', strtotime($j->date_of_wedding)) : '' }}
                                                 </td>
                                             </tr>
                                         @endforeach
                                     </table>
                                 </div>
                                 <hr class="mb-0">
                             @endforeach
                             <div>
                                 <a href="{{ route('sector_view') }}" class="btn btn-secondary">Back</a>
                             </div>
                         </form><!-- Vertical Form -->

                     </div>
                 </div>
             </div>
         </div>
     </section>

 </main><!-- End #main -->
