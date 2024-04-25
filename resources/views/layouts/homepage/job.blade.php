@include('layouts.component.headerhomepage')  
 
<div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{url('assetsdepan/images/artikel.jpg')}}" alt="Breadcrumbs">
                        <img class="mobile" src="{{url('assetsdepan/images/artikel.jpg')}}" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Halaman Job/Pencarian Tenaga Kerja</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>Halaman Job/Pencarian Tenaga Kerja</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

            <!--================= Campus Section Start Here =================-->
            <div class="campus-section-six">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 p---0">
                        <div class="campus-picture"><img src="{{ url('assetsdepan/images/aboutus.jpg')}}"
                                alt="campus-picture"></div>
                    </div>
                    <div class="col-xl-6 p---0">
                        <div class="contents">
                            <h1 class="campus-title">Form Pencarian</h1>
                            <form class="search-form" action="{{ route('homepage.carijob') }}" method="get">
                            <div class="row">
                            <label class="col-sm-3 col-form-label text-white">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required name="nama" placeholder="Isi Nama Anda">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <label class="col-sm-3 col-form-label text-white">Pendidikan Terakhir</label>
                            <div class="col-sm-9">
                                <select class="form-control" required name="pendidikan_terakhir">
                                    <option>--Pendidikan Terakhir</option>
                                    <option>D3</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                </select>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <label class="col-sm-3 col-form-label text-white">Pilih Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <select class="form-control" required name="matapel">
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
                                <option>Kuliner</option>
                                <option>Produktif MPLB</option>
                                <option>Produktif DKV</option>
                                </select>
                            </div>
                            </div>
                            <br>      
				<div class="row">
				  <label class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<button class="btn btn-danger" type="submit">Submit</button>
				  </div>
				</div>				
            </form>					
            </div>                                                                              

                        </div>
                    </div>
                </div>
            </div>
            <!--================= Campus Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-upcoming__event react-upcoming__event_page blog__area pt---100 pb---112">
                    <div class="container pb---70"> 
                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-6">
                                <div class="all__icons">                                   
                                  
                                </div>
                            </div>
                        </div>                                                  
                        <!--================= <div class="row">
                        @forelse ($sekolah as $tampilsekolah)    
                            <div class="col-lg-3">
                                <div class="event__card">
                                    <div class="event__card--content">
                                        <div class="event__card--content-area">
                                            <div class="event__card--date"><em>{{$tampilsekolah->kebutuhan_tenagakerja}}</em>Tenaga Kerja Dibutuhkan</div><br>                                  
                                            <h3 class="event__card--title"><a href="#">{{$tampilsekolah->nama_sekolah}}</a></h3>
                                            <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>{{$tampilsekolah->alamat_sekolah}}</div>
                                            <a class="event__card--link" href="{{ route ('homepage.detailsekolah',$tampilsekolah->id) }}"> Detail <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h5 class="text-center">BELUM ADA DATA JOB TERBARU </h5>
                            @endforelse 
                        </div>=================-->  
                        <br>
                        <div id="map"></div>
                        <!--================= Pagination Section Start Here =================-->
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
<script>
	var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		});

	var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/satellite-v9'
		});


	var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		});

	var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/dark-v10'
		});  
  
	  var map = L.map('map').setView([1.5673885716354892, 124.98448501869412], 11);
	  const apiKey = "AAPKe1e02d452ac74e9b9a57913d49e6ca73XntLgl_BvHud8Lw7nn-265FcxkM-UOu2yJhz4CRUaUda6WCx5pElHcaF15IvkHoL";
	  
	  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
	  }).addTo(map);
	  
	  var baseMaps = {
		"Light": peta1,
		"Satelite": peta2,
		"Streets": peta3,
		"Dark": peta4
	};


	var layerControl = L.control.layers(baseMaps).addTo(map);
	  

	  @foreach ($sekolah as $tampilmaps)  
	  var marker = L.marker([{{ $tampilmaps->koordinat_gps }}]).addTo(map).bindPopup("<img class='img-fluid' src='{{ url ('gambarsekolah/') }}/{{ $tampilmaps->gambar }}' alt='gambar'><div class='card-body'><a href='{{ route ('homepage.detailsekolah',$tampilmaps->id) }}'>{{ $tampilmaps->nama_sekolah}} ( Kebutuhan : {{ $tampilmaps->kebutuhan_tenagakerja}})</a>");
	  @endforeach
  
</script>
@include('layouts.component.footerhomepage')		