@include('layouts.component.headerhomepage')

        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
       
            <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{url('assetsdepan/images/artikel.jpg')}}" alt="Breadcrumbs">
                        <img class="mobile" src="{{url('assetsdepan/images/artikel.jpg')}}" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Detail Sekolah {{ $sekolah->nama_sekolah }}</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>{{ $sekolah->nama_sekolah }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>            

            <div class="back__course__page_grid react-courses__single-page react-events__single-page pb---40 pt---120">
                    <div class="container pb---70">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="events-details">
                                    <h3>{{ $sekolah->nama_sekolah }}</h3>
                                    
                                    <?php
                                        echo $sekolah->informasi_lainnya;
                                    ?>

                                    <div id="mapke2"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mt-60">
                                <div class="react-sidebar react-back-course2 ml----30">                                                                        
                                    <div class="widget get-back-course">   
                                        <img class="img-fluid" src="{{ url ('gambarsekolah/') }}/{{ $sekolah->gambar }}">                                                                           
                                    </div> 
                                    <div class="widget react-date-sec">
                                        <ul class="recent-date">
                                            <li> Nama Sekolah: <b>{{ $sekolah->nama_sekolah }}</b></li>
                                            <li> Alamat: <b>{{ $sekolah->alamat_sekolah }}</b></li>
                                            <li> Status: <b>{{ $sekolah->status }}</b></li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <!--================= Course Filter Section End Here =================--> 
                            
            
        </div>
        </div>

<!--================= Course Filter Section End Here =================--> 
   
<script>

navigator.geolocation.getCurrentPosition(function(location) {
  var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

  var mapke2 = L.map('mapke2').setView([1.5673885716354892, 124.98448501869412], 11);;

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapke2);

    L.Routing.control({
			waypoints: [
				L.latLng(latlng), //titik utama
				L.latLng({{ $sekolah->koordinat_gps }}) //titik tujuan
			],
			routeWhileDragging: false
		}).addTo(mapke2);	
});
</script>
@include('layouts.component.footerhomepage')	