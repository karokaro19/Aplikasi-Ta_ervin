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
                                    <h1 class="breadcrumbs-title">Halaman Artikel</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{ url ('homepage.home')}}">Home</a></li>
                                            <li>Artikel</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container pb---70"> 
                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-6">
                                <div class="all__icons">                                   
                                  
                                </div>
                            </div>
                        </div>                                                  
                        <div class="row">      
                        @foreach ($artikel as $tampilartikel)                        
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"> {{$tampilartikel->foreign_kategori->nama_kategori}}</a>
                                        <img src="{{ url ('gambarartikel/') }}/{{ $tampilartikel->gambar_artikel }}" height="440px" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">{{$tampilartikel->judul_artikel}}</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> {{$tampilartikel->created_at}}</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Admin </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> 

                                            </li>
                                            <li class="price"><span class="learn-details"><a href="{{ route('homepage.detailartikel', $tampilartikel->id) }}">
                                                        Details <i class="fa-solid fa-arrow-right"></i></a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         @endforeach                            
                        </div>
                        <!--================= Pagination Section Start Here =================-->
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>

@include('layouts.component.footerhomepage')		