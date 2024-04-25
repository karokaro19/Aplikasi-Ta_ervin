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
                                    <h1 class="breadcrumbs-title">Halaman Job/Pencarian Tenaga Kerja {{$datajurusan}}</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>Halaman Job/Pencarian Tenaga Kerja {{$datajurusan}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->



                
                <!--================= Course Filter Section Start Here =================-->
                <div class="react-upcoming__event react-upcoming__event_page blog__area pt---100 pb---112">
                    <div class="container pb---70"> 
                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-12">
                                <div class="all__icons">                                   
                                  <h3><center>Daftar Sekolah yang membutuhkan tenaga kerja yang pendidikan terakhirnya di atas SMA/SMKN dan berjurusan {{$datajurusan}}</center></h3>
                                </div>
                            </div>
                        </div>        
                        <br>                                          
                        <br>                                          
                        <div class="row">
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
                            <h5 class="text-center">Belum ada data job terbaru </h5>
                            @endforelse 
                        </div> 
                        <button type="button" href="{{ route ('homepage.detaillowongan') }}"></button> 
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
