@include('layouts.component.header')

  <main id="content" role="main" class="main">
	
  <div class="content container-fluid">
  
  <div class="card mb-3 mb-lg-5">
  
	<!-- Header -->
	<div class="card-header card-header-content-between">
	  <h4 class="card-header-title">Grafik Kebutuhan tenaga kerja</h4>
<br>
<br>
<br>
	</div>
	<!-- End Header -->

	<!-- End Body -->

	<!-- Vector Map -->
    <div class="simple-bar-chart">
        @foreach($datasekolah as $sekolah)
            <div class="item" style="--clr: #{{ substr(md5($sekolah->nama_sekolah), 0, 6) }}; --val: {{ $sekolah->kebutuhan_tenagakerja }}">
                <div class="label">{{ $sekolah->nama_sekolah }}</div>
                <div class="value">{{ $sekolah->kebutuhan_tenagakerja }}%</div>
            </div>
        @endforeach
    </div>
  <!-- End Card -->

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <!-- Content -->
    <div class="content container-fluid">
  
      <div class="card mb-3 mb-lg-5">
	  
        <!-- Header -->
        <div class="card-header card-header-content-between">
          <h4 class="card-header-title">Maps</h4>
<br>
<br>
<br>
        </div>
        <!-- End Header -->

        <!-- End Body -->

        <!-- Vector Map -->
        <div class="jsvectormap-custom-wrapper">
          <div id="map"></div>
        </div>
        <!-- End Vector Map -->
      </div>
      <!-- End Card -->
  
    </div>
    <!-- End Content -->
	  
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
	  var marker = L.marker([{{ $tampilmaps->koordinat_gps }}]).addTo(map).bindPopup("<img class='img-fluid' src='{{ url ('gambarsekolah/') }}/{{ $tampilmaps->gambar }}' alt='gambar'><div class='card-body'><a href='{{ route ('sekolah.edit',$tampilmaps->id) }}'>{{ $tampilmaps->nama_sekolah}} ( Alamat : {{ $tampilmaps->alamat_sekolah}})</a>");
	  @endforeach
  
</script>

@include('layouts.component.footer')
