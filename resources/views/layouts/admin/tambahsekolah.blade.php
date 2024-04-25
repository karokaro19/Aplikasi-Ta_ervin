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
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Sekolah</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Sekolah</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Sekolah</h1>
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
                Form Tambah Sekolah 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <form action="{{ route('sekolah.prosestambah')}}" method="post" enctype="multipart/form-data">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Sekolah</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="nama_sekolah">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Alamat Sekolah</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="alamat_sekolah">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kordinat GPS</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="koordinat_gps">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kebutuhan TenagaKerja</label>
				  <div class="col-sm-9">
					<input type="number" class="form-control" required name="kebutuhan_tenagakerja">
				  </div>
          </div>
          <br>         
          <div class="row">
            <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
            <select class="form-control" name="status">
                          <option>DICARI</option>
                          <option>TIDAK SEDANG MENCARI</option>
                      </select>
            </div>
          </div>
				<br>                                                                				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Gambar Sekolah</label>
				  <div class="col-sm-9">
					<input type="file" class="form-control" required name="gambar">
                                    @error('gambar')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror    					
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Informasi Lainnya</label>
				  <div class="col-sm-9">
					<textarea name="informasi_lainnya"></textarea>
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
