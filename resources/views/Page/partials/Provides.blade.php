{{--Provide--}}
<div class="container">
    <div class="headline-center margin-bottom-60">
        <h2>Mengapa kita membuat mastahcode</h2>

        <p>
            Dimulai penyakit saya yang sering lupa tentang apa yang saya pelajari,
            tidak adanya dokumentasi apa yang saya lakukan ketika belajar. Itu semua membuat saya
            ingin menuliskan sesuatu hasil belajar saya dan membagikan (share) ke orang lain juga
            tentang apa yang saya pelajari. Dengan membagikan pengetahuan kita kepada orang lain, Saya sangat
            yakin Insyalllah ilmu kita akan lebih bermanfaat dan ilmu yang kita miliki akan abadi serta
            mendapatkan Pahala, amin
        </p>

        <br>
        <blockquote>
            <p><em>"Ingatlah, sekecil apapun ilmu yang kamu tulis dan bagikan, itu semua akan bermanfaat bagi orang lain
                    dan hal yang sangat sederhana yang kamu tulis juga bisa bermanfaat bagi orang lain"</em></p>
        </blockquote>
    </div>
    <!--/end Headline Center-->

    <div class="headline-biasa margin-bottom-60">
        <h2>Join Us</h2>

        <p>
            Mastahcode dibangun untuk siapapun, kami sangat ingin kamu ikut <a
                    href="{{url(action('RegisterUserController@getRegister'))}}">Bergabung</a>
            dengan kami dan mulai <a href="{{url(action('blogController@search'))}}">Menuliskan</a> ilmu anda yang
            sangat luar biasa untuk kita semua
        </p>

        <p>Terimakasih</p>
    </div>

    <hr>
    <div class="row">
        <div class="margin-bottom-10">
            <div id="testimonials-1" class="carousel slide testimonials testimonials-v1">
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="{{url(action('ProfileController@indexFront','waviq'))}}">
                            <div class="testimonial-info">
                                <img class="rounded-x"
                                     src="{{asset('/img/users/1.jpg')}}"
                                     alt="">
                                <span class="testimonial-author">
                                        Waviq Subhi
                                        <em>Developer Mastahcode</em>
                                </span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <hr>

</div><!--/end container-->



{{--end service provide--}}