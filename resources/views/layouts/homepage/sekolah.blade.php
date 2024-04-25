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
                                    <h1 class="breadcrumbs-title">Halaman Sekolah</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>Halaman Sekolah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="instructors___page pt---120 pb---140">
                    <div class="container pb---60">                        
                        <div class="row">
                        @forelse ($sekolah as $tampilsekolah)   
                            <div class="col-lg-3">
                                <div class="instructor__content">
                                    <div class="instructor__image">
                                        <img src="{{ url ('gambarsekolah/') }}/{{ $tampilsekolah->gambar }}" alt="course instructor">
                                        <div class="content__hover">
                                            <p>{{$tampilsekolah->alamat_sekolah}}</p>
                                            <ul>                                            
                                                <li><a href="{{ route('homepage.detailsekolah', $tampilsekolah->id) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                    <div class="bottom-content"> 
                                        <h4><a href="{{ route('homepage.detailartikel', $tampilsekolah->id) }}">{{$tampilsekolah->nama_sekolah}}</a></h4>
                                        <p>{{$tampilsekolah->status}}</p>
                                    </div>                                 
                                </div>
                            </div>
                        @empty
                        <h5 class="text-center">Belum ada data sekolah</h5>
                        @endforelse  
                        </div>
                    </div>
                </div>                
           
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
@include('layouts.component.footerhomepage')		