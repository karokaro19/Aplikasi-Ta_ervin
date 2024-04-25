@include('layouts.component.headerhomepage')

<div class="react-wrapper">
        <div class="react-wrapper-inner">

                <!--=================  Banner Section Start Here ================= -->
                <div class="hero3__area p-relative">
                    <div class="hero3__shape">
                        <img class="hero3__shape-1" src="assetsdepan/images/user.png" alt="Banner shape image">
                           </div>
                    <div class="container p-relative">                        
                        <div class="hero3__content">
                            <h1 class="hero3__title">Cari Sekolah Berdasarkan <br> <em>Nama Sekolahnya</em></h1>
                            <img src="assetsdepan/images/banner2/line_01.png" alt="line">
                            <form class="search-form" action="{{ route('homepage.carisekolah') }}" method="get">
                                <input type="text" name="cari" class="form-input" placeholder="Cari Sekolah">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </button>
                            </form>
                            <p class="hero3__paragraph">Punya Pertanyaan? Silahkan Tanya Ke Admin</p>
                        </div>
                        <div class="about__content">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="assetsdepan/images/banner2/bg.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>{{$tenagakerja}}</h4>
                                        <p>Total Pencarian <br> Tenaga Kerja .</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assetsdepan/images/banner2/bg11.png" alt="image">
                                    </div>
                                    <div class="text">
                                        <h4>{{$countartikel}}</h4>
                                        <p>Total Seluruh <br> Artikel.</p>
                                    </div>
                                </li>
                            </ul>  
                        </div>                    
                        <div class="hero3__image">
                            <img class="hero3__image-1" src="assetsdepan/images/32058.jpg" alt="image">
                            </div>
                    </div>
                </div>
                <!--=================  Banner Section End Here ================= -->  
<!-- pembatas -->

            <!--================= Campus Section Start Here =================-->
            <div class="campus-section-six">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 p---0">
                        <div class="campus-picture"><img src="{{ url('assetsdepan/images/aboutus.jpg')}}"
                                alt="campus-picture"></div>
                    </div>
                    <div class="col-xl-6 p---0">
                        <div class="contents">
                            <h1 class="campus-title">About US</h1>
                            <p>Kota Tomohon merupakan salah satu daerah yang ada di Sulawesi Utara, dapat dicapai dengan menggunakan transportasi darat dari ibu kota Provinsi sulawesi utara, Manado +25 Km.jika dari bandara Internasional Sam Ratulangi +34 Km.      
                            <br>	Aplikasi ini merupakan perangkat lunak yang digunakan untuk membantu pengguna yakni pihak sekolah maupun calon Guru untuk mengakses 
                            kebutuhan tenaga Guru SMA dan SMK di Kota Tomohon.
                            <br>Aplikasi Pemetaan Kebutuhan guru SMA dan SMK di Kota Tomohon dibuat untuk dapat mempermudah Calon Guru untuk melihat informasi mengenai kebutuhan Tenaga Guru di SMA dan SMK yang ada di kota Tomohon dalam membantu memberikan informasi untuk mengetahui kebutuhan tenaga kerja guru SMA dan SMK di Kota Tomohon.    
                            <br>Diharapkan dengan adanya aplikasi ini dapat membantu intansi sekolah yang memerlukan kinerja guru, serta guru yang memerlukan sekolah sebagai tempat mengabdi.</p>
                            </div>
                    </div>
                </div>
            </div>
            <!--================= Campus Section End Here =================-->

		<!-- pembatas -->

            <!--=================  Courses Start Here  =================-->
            <div class="courses-section-six pt---120 pb---120">
                <div class="container">
                    <div class="section-title-area-six text-center mb---70">
                        <div class="section-title">Artikel Terbaru
                        </div>
                    </div>
                    <div class="slider-area">
                        <div class="swiper coursesSlider-6">
                            <div class="swiper-wrapper">
                            @foreach ($artikelterbaru as $tampilartikel)  
                                <div class="swiper-slide">
                                    <div class="course-card">
                                        <div class="card-image"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}"><img
                                                    src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" alt="card-image"></a></div>
                                        <div class="price-tag">{{$tampilartikel->foreign_kategori->nama_kategori}}</div>
                                        <div class="card-inner">
                                        <div class="top-info">
                                                <span class="subject"><i class="fa-solid fa-folder-open"></i> {{$tampilartikel->foreign_kategori->nama_kategori}}
                                                    </span>
                                            </div>                                            
                                            <div class="contents">
                                                <span class="card-title"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">{{$tampilartikel->judul_artikel}}</a></span>
                                                <div class="status">
                                                <span class="students"><i class="fa-regular fa-user"></i>
                                                        Admin</span>
                                                    <span class="students"><i class="fa-regular fa-calendar  "></i>{{$tampilartikel->created_at}}</span>
                                                </div>
                                            </div>
                                            <div class="bottom-content d-flex align-items-center">
                                            <div class="courses-rating-six">
                                                </div>                                                
                                                <span class="learn-details"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">
                                                        Details <i class="fa-solid fa-arrow-right"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <button class="browse-course-btn home-six-btn"><a href="{{route('homepage.artikel')}}">Selengkapnya
                            </a><i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
            <!--=================  Courses End Here  =================-->

            <div class="overview-section-six pb---120">
                <div class="container">
                <div class="section-title-area-six text-center mb---70">
                        <div class="section-title">Maps
                        </div>
                    </div>                    
                    <div class="row justify-content-between">
                          <div id="map"></div>
                    </div>
                </div>
            </div>
            <!--================= Overview Section End Here =================-->

            
                <!--================= Counter Section Start Here =================-->
                <div class="count__area pb---110">
                    <div class="container count__width">
                        <div class="row">
                            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Total <br>Kategori</p>
                                            <h3 class="count__content--title-1 counter">{{ $countkategori }}</h3>
                                            <p class="count__content--paragraph2">In Our Database</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Total <br>Artikel</p>
                                            <h3 class="count__content--title-1 counter">{{$countartikel}}</h3>
                                            <p class="count__content--paragraph2">In Our Database</p>                                           
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Total <br>Sekolah</p>
                                            <h3 class="count__content--title-1 counter">{{$countsekolah}}</h3>
                                            <p class="count__content--paragraph2">In Our Database</p>                                          
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Total Pencarian <br>Tenaga Kerja</p>
                                            <h3 class="count__content--title-1 counter">{{$tenagakerja}}</h3>
                                            <p class="count__content--paragraph2">In Our Database</p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= Counter Section End Here =================-->


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
	  

	  @foreach ($datasekolah as $tampilmaps)  
	  var marker = L.marker([{{ $tampilmaps->koordinat_gps }}]).addTo(map).bindPopup("<img class='img-fluid' src='{{ url ('gambarsekolah/') }}/{{ $tampilmaps->gambar }}' alt='gambar'><div class='card-body'><a href='{{ route ('homepage.detailsekolah',$tampilmaps->id) }}'>{{ $tampilmaps->nama_sekolah}} ( Alamat : {{ $tampilmaps->alamat_sekolah}})</a>");
	  @endforeach
  
</script>
     
@include('layouts.component.footerhomepage')	