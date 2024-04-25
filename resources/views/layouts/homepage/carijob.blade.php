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
                                    <h1 class="breadcrumbs-title">Halaman Job/Pencarian Tenaga Kerja {{$datamatapel}}</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>Halaman Job/Pencarian Tenaga Kerja {{$datamatapel}}</li>
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
                                  <h3><center>Daftar Sekolah yang membutuhkan tenaga kerja yang pendidikan terakhirnya di atas SMA/SMKN dan berjurusan {{$datamatapel}}</center></h3>
                                </div>
                            </div>
                        </div>        
                        <br>                                          
                        <br>                                          
                        <div class="row">
                        @forelse ($lowongan as $tampillowongan)    
                            <div class="col-lg-3">
                                <div class="event__card">
                                    <div class="event__card--content">
                                        <div class="event__card--content-area">
                                            <div class="event__card--date"><em>{{$tampillowongan->kebutuhan}}</em>Tenaga Kerja Dibutuhkan</div><br>
                                                                           
                                            <h3 class="event__card--title"><a href="#">{{$tampillowongan->nama_sekolah}}</a></h3>
                                            <br>
                                            
                                        <br>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h5 class="text-center">Belum ada data job terbaru </h5>
                            @endforelse 
                        </div> 
                        
                        <!--================= Pagination Section Start Here =================-->
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>

@include('layouts.component.footerhomepage')		