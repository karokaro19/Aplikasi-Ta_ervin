@include('layouts.component.header')

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Lowongan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Lowongan</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Lowongan</h1>
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->	  

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">      
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header"> 
              <h4 class="card-header-title">
                Form Tambah Lowongan 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            
            <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{ route('lowongan.prosestambah')}}" method="post" enctype="multipart/form-data">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Sekolah</label>
				  <div class="col-sm-9">
                  <select required name="nama_sekolah" class="form-select" aria-label="Default select example">
                    <option>--Pilih Sekolah--</option>
                    @foreach ($sekolahs as $item)
                    <option name="{{$item->id}}">{{$item->nama_sekolah}}</option>
                    @endforeach
                    </select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Mata Pelajaran</label>
				  <div class="col-sm-9">
					<select type="text" class="form-select"  required name="matapel">
          <option>--Pilih Mata Pelajaran---</option>
          <option>Pendidikan Agama dan Budi Pekerti Islam</option>
                                <option>Pendidikan Agama dan Budi Pekerti Kristen</option>
                                <option>Pendidikan Agama dan Budi Pekerti Katolik</option>
                                <option>Pendidikan Agama dan Budi Pekerti Hindu</option>
                                <option>Pendidikan Agama dan Budi Pekerti Budha</option>
                                <option>Pendidikan Agama dan Budi Pekerti Konghucu</option>
                                <option>Pendidikan Pancasila dan Kewarganegaraan</option>
                                <option>Bahasa Indonesia</option>
                                <option>Pendidikan Jasmani, Olahraga dan Kesehatan</option>
                                <option>Seni Budaya</option>
                                <option>Matematika</option>
                                <option>Bahasa Inggris</option>
                                <option>Sejarah</option>
                                <option>Fisika</option>
                                <option>Kimia</option>
                                <option>Biologi</option>
                                <option>Sosiologi</option>
                                <option>Geografi</option>
                                <option>Ekonomi</option>
                                <option>Bahasa Jepang</option>
                                <option>Bahasa Prancis</option>
                                <option>Bahasa Jerman</option>
                                <option>Antropologi</option>
                                <option>Prakarya dan Kewirausahaan</option>                             
                                <option>Profil Pancasila</option>
                                <option>Bimbingan dan Konseling</option>
                                <option>BK-TIK</option>
                                <option>Simulasi Digital</option>
                                <option>Produktif Perhotelan</option>
                                <option>Produktif Keperawatan / Layanan Kesehatan</option>
                                <option>Produktif Tata Boga</option>
                                <option>Produktif Rekayasa Perangkat Lunak</option>
                                <option>Produktif Kreatif dan Kewirausahaan</option>
                                <option>Produktif Kuliner</option>
                                <option>Produktif MPLB</option>
                                <option>Produktif DKV</option>
                                <option>Produktif Akutansi</option>
                                

          </select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kebutuhan Tenaga Kerja</label>
				  <div class="col-sm-9">
					<input type="number" class="form-control"  required name="kebutuhan">
				  </div>
				</div>
        <br>
        <div class="row">
				  <label class="col-sm-3 col-form-label">Status</label>
				  <div class="col-sm-9">
					<select class="form-control" name="status">
                        <option>--Pilih Status--</option>
                        <option>DICARI</option>
                        <option>TIDAK SEDANG MENCARI</option>
                    </select>
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<button class="btn btn-primary" type="submit">Submit</button>
				  </div>
				</div>				
            </form>					
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

       </div>
      <!-- End Row -->	  
	  
	<!-- End Content -->
<!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; {{ config('app.name') }}</p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  
  <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  plugins: [
    'table',
    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons | help',
  menu: {
    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'table favs file edit view insert format tools table help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});</script> 




@include('layouts.component.footer')
