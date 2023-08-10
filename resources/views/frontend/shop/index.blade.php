@extends('layouts.frontend')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg">
      <div class="container banner">
        <div class="row">
          <div class="quanlytong_musiclist">
                <div class="mySlidess sfade">
                    <img src="{{ asset('frontend/img/hero/th.png') }}" alt="DJ Thái Hoàng">
                </div>
                <div class="mySlidess sfade">
                    <img src="{{ asset('frontend/img/hero/vavh.png') }}" alt="DJ Thái Hoàng">
                </div>
                <div class="mySlidess sfade">
                    <img src="{{ asset('frontend/img/hero/bao.png') }}" alt="DJ Thái Hoàng">
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
                <script src="{{ asset('frontend/js/mainslide.js') }}"></script>
          </div>

        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->

    <!-- Product Section End -->
    <div class="music_phobien">
                    <div class="music_phobien_tieude">
                        <h1>Popular Music</h1>
                        <div class="music_phobien_tieude--dieukhien">
                            <i id="traialbum" class="fa-solid fa-arrow-left"></i>
                            <i id="phaialbum" class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="list_song">
                        
                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/7.jpg') }}" alt="datbear" >
                                <i class="fa-solid playmusicc fa-circle-play" id="7"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Thái Hoàng Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/8.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="8"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/9.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="9"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/10.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="10"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/11.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="11"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/12.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="12"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/13.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="13"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>

                        <li class="musiclist_list">
                            <div class="list_song_music--img">
                                <img src="{{ asset('frontend/img/imgmu/14.jpg') }}" alt="datbear">
                                <i class="fa-solid playmusicc fa-circle-play" id="14"></i>
                            </div>
                            <h5>
                                Trọn Nghĩa Vẹn Tình
                                <br>
                                <div class="musiclist_list--namemusic">Đạt Bear Remix</div>
                            </h5>
                        </li>
                    </div>
                </div>
                <script src="{{ asset('frontend/js/main.js') }}"></script>

                <div class="music_dj">
                    <div class="music_phobien_tieude">
                        <h1>TOP DJ</h1>
                        <div class="music_phobien_tieude--dieukhien">
                            <i id="traialbum1" class="fa-solid fa-arrow-left"></i>
                            <i id="phaialbum1" class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="item">
                        <li>
                            <a href="nghesi.html">
                                <img src="{{ asset('frontend/img/imgmu/th.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                                <div class="number1">
                                    <img src="{{ asset('frontend/img/imgmu/1st.png') }}" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/baoteng.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                                <div class="number1">
                                    <img src="{{ asset('frontend/img/imgmu/2st.png') }}" alt="">
                                </div>
                            </a>
                        </li>                        
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/binhho.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                                <div class="number1">
                                    <img src="{{ asset('frontend/img/imgmu/3st.png') }}" alt="">
                                </div>
                            </a>
                        </li>                        
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/nood.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                        
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/phithanh.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/tilo.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                         
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/tommy.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/trieumuzik.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/binhho.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/binhho.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/binhho.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>                          
                        <li>
                            <a href="">
                                <img src="{{ asset('frontend/img/imgmu/binhho.jpg') }}" alt="Thái Hoàng" title="DJ THÁI HOÀNG">
                            </a>
                        </li>  
                    </div>
                </div>  


    <div class="chon">
        <div class="songmusic">
            <i class="fa-solid nut fa-compact-disc"></i>
        </div>
        <img src="{{ asset('frontend/img/imgmu/th.jpg') }}" id="namemusictong">
        <h5 id="name_tong">
            Đời Là Thế Thôi
            <div class="musiclist_list--namemusic">Thái Hoàng Remix</div>
        </h5>
        <div class="icon">
            <i class="fa-solid nutmusic fa-sliders">repeat</i>
            <i class="fa-solid fa-backward-step" id="back"></i>
            <i class="fa-solid fa-circle-play" id="masterPlay"></i>
            <i class="fa-solid fa-forward-step" id="next"></i>
            <a href="" download id="dowload_muisc"><i class="fa-solid fa-circle-arrow-down"></i></i></a>
        </div>
        <span id="currentstart">0:00</span>
        <div class="bar">
            <input type="range" id="seek"  min="0" value="0" max="100" >
            <div class="bar2" id="bar2"></div>
            <div class="dot" id="dot1"></div>
        </div>
        <span id="currentend">0:00</span>

        <div class="vol">
            <i class="fa-solid fa-volume-high" id="vol_icon"></i>
            <input type="range" id="voll"  min="0" value="0" max="100">
            <div class="vol_bar" id="volbar"></div>
            <div class="dott" id="vol_dot"></div>
        </div>
</div>
    <script src="{{ asset('frontend/js/music.js') }}"></script>

@endsection
