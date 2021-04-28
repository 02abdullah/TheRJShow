@extends('main')

@section('title', 'Home')

@section('header')
    <!-- Header -->
    <header style="background-color: #c3073f" class="py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-dark mt-5 mb-2">The Rhys & James Show</h1>
                    <p class="lead mb-5 text-dark"><strong>Welcome to our website, here you’ll find blogs and exclusive
                            videos regarding University life, as well as insight into the daily life of a student and
                            their personal stories to hopefully help inform you about University and what it has to
                            offer.</strong></p>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>Who We Are</h2>
            <hr>
            <p>Students come from all over the world, and from different walks of life, to enjoy the University
                experience. We
                know that university life can be filled with a lot of highs, but also, a lot of lows. We hope to connect
                with students
                with each episode we put out, discussing a variety of topics. By sharing each others' stories, we hope
                to show that we're
                all learning how
                to get through this chapter of our lives.</p>
            <p>Experience University. <strong>Experience Together.</strong></p>
            <a class="btn btn-primary btn-lg" href="/posts">Check out our community!</a>
        </div>
        <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                The RJ Show
                <br>127 Crown Street
                <br>LONDON, SW11 9HL
            </address>
            <address>
                <p><em>Tel: </em>01234 567890
                    <br>
                    <em>Email: </em><a href="mailto:therjshow2019@gmail.com">therjshow2019@gmail.com</a>
                </p>
            </address>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>Putting Faces to the Names</h2>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top"
                             src="https://lh3.googleusercontent.com/fq7WyEiY3deKYp4PnpNjsFVf2hWkhrygw1jRypxVAF4JSXSUjEFvSEGyyZbWkYVcyehL1I9TlHOEdz_5v0rz6AI-WhEM1xmmYZNnwrmCpQQKJGCsxEXXg8JRg1EyiLsvcaapjgdhrDZM2Ynt5ZWcsivJGYKtRzsYq15XdWCSVx-tezoktyqGIbjOYDE1R0urbnD-jvF1hdtWfr2tpmHkQrDVgHdROnaGDxM3NOdiPB29POH3FcFZI7gvFrxiaIRWra5qcc26I7vjFe5PIusovlgEc-EZVDuipnF-X4vbYTcdHi145csL7BbhWkx4Pn0v72CUcUhLv33UPOUyv_taWGrMzyuy2cPuqe_AcYzrlQ7VG6V7vGaa8cYSCkMqScFJSVoCHH9tlVn9MMUmBYIQ6vfxbiUWC7tU3Y-OHHR7OAbo21uXy46bdBca8VyPVA_yfIeO1xIc5UCIW-o8Te7-S5IUk8-JArQ7UpsbaBiAn6Eupt6N7NzAUCWQNV6PR_IEgIgJqEhffZqamhWTriP8EJ2biHPs_T_T1j3iGmJjYW26DySbwKYtdTUMkZ39QWyMeCV-HKDZ0nvfOOF05pOQYUBPjAgkshaqtT3gplUIUoARl6ibZI247dMomULC5IX3BBo-xfCPbSR1bCIrGIkjfFj-8Z087gDU4MbzFKZ4l28LmHnqpg0HtUjX_ul5Cw=s777-no?authuser=0"
                             width="200px" height="400px" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Rhys Khan</h4>
                            <p class="lead">Host</p>
                            <p>My name is Rhys. I am interested in how people make deep connections with each through learning - mostly online. I design and create online learning tools and communities. I am also interested in how people make deep connections through food (but that's for another time). In 2009 I founded Peer 2 Peer University with 4 friends, when we realized that it was possible to learn anything online, if you had a few friends to learn with (and really hard without the friends).

                                I've lived on three continents and travelled on 5. I moved to Boston from Cape Town and am now happily based at the MIT Media Lab, but my dad's family is from southern Hungary and you never know when my Gypsie roots will call again.

                                I have a weakness for old cars and believe the perfect number of old cars to own is N+1, where N is the number of old cars you currently own. I currently own a 1967 Mercedes that is standing in a garage in Germany and which I haven't driven for 15 years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top"
                             src="https://lh3.googleusercontent.com/jABEGZxo3StrpIB1hCEpc_f_Cu33SRkHqYmai5nLxHZDFEO12ZLxkJ3spBBcujax15nLMrPEaA8TaurIVFw-PAeJKFz5jgSWA7yP7BScoMEC129gEKKmChbxKqy0M5c27oG2NXRSjsGt-VLZzM7AyV8k95URpAQCz2wY31uQGE4z-tJ8WLLi-sK5h44AAPhjsRykYKrdrS5ts92Bvl818Ymo1BVT5To_v_iYy_zMGAoZr3_tcrOGOpBaDSUT-H77p0EQ65V1tWKfTPzzB0jviOcz0FUV759cTFTV8SgI799lTG7Uym2FnCt0hpGet6VGQvF-bSFER9gV7I8T7jsQHXoOw3qxqMAF9ga_WWpTMatCLejnFFiSzt3KkE8XeVFeXqOkfaxrkD5lFmgqAty9cG0q32Mk1XkPRwAo4pxe6E0rMN8Chu1W1gJo2LOGvz5-IBCwK7I0HKAGpKUtdm44dzlODqvQ5Vh4CFX8LNvIxxH2FjKmia53hgQP8TmM9_RKDIadYE2R05K5NhvqEXv-PaXLOUeyPJx_JdAIoc7KW46WyotLXYKcedng0ky_vJXsYCrM8UzD0JSAqkLNiuroFaOK6rXrRFcyEohofzCVp_jKPHlqhAsB4QuD-7HZ3QcmQgV8BiAtHzXq-zhW1iwaQjLsLvq5Q3J6o0no1ZrSnFhYuDpyqa4UmX-W37CL4w=w864-h873-no?authuser=0"
                             width="200px" height="400px" alt="">
                        <div class="card-body">
                            <h4 class="card-title">James Thomas</h4>
                            <p class="lead">Host</p>
                            <p>Hi my name is James, I am a "graduate" of the first LCL course. Like all great learning it changed and transformed me and I feel it will do the same for all of you.

                                I have been asked to be a part of the second "journey" by the LCL team, to help in online discussions and give support in whatever way I can. I am very happy to do this and know that I will learn so much more from you all in the weeks ahead.

                                As a brief introduction to myself, I am a retired teacher, headteacher and Primary Mathematics Consultant living in the U.K. I regularly blog about "lifelong learning" and have a real interest in the the importance of recent developments in neuroscience and technology to transform education from where it currently lies in the past to where it us capable of getting to.

                                I look forward to our online discussions and wish you well in your future growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <h2>Follow Our Socials</h2>
            <hr>
            <div class="row">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="https://m.youtube.com/channel/UCNpZoy0ZhftWVx4t5oifPhw" target="_blank">
                                <img class="mx-auto d-block"
                                     src="https://lh3.googleusercontent.com/RpcF3vlPuuL_ui9q3pikigA9xgWXGkR6dZewmTNgAoW2HH42qgCcziSJaRFN5B1A8LSLfo4VMou43iJC4viCsXNAarsAToEYq3ezAPZiUgPLOYhf07EwWikUsN8PTnxMPcuckvNW6wUnQ6Dihg3RnKYGMcxHbypjIAoavdLXvIpzEStU77UdaBgDHmyeCyG8bDNWNB3bGmOGgk-1EP1Y5toQctIApd1VzSApuhgiVrz3yx7s4xmU3h8cHbGfr-cprT6wEmUsy8toYPAy7QnFH0y9K66FyOd4181MN-_4PFKJIRnXRJsp46I7uyJqveMXoL7ubEb29py2qaKDNFtb5yZkuujwSRzGh60Xtm7vYoJwtyZHSo32vIZnVLagXx__Y2cMqvhqT0RS-lGLRXhwBLnIaInQ9zeJDhFnQRUitAogFXZCFQLPPH9mPY5v9_i1kQcLG_pmC2_xEtXq2H59BL2JgP9RxvNssWGfF2DC86SZKU6IIKwMbRuWDY627kmBLiCGthKKW7pIhL-M5Yph6MLxxuZntatq2iOvf2HySps8pnMplC5KzAEmAV5cBu3EgpW_CZ6o1CeF0XtSgL1CcrNofdW6b6guj7veOjwAvL8OHLs4Xbzg0hSNLqC1Q5wmFHD4kmLXCtOfrdNKX9PUStccz9Ym2tvgs66QECXp5v4K7enZ2U87X_S36cea-g=w200-h300-no?authuser=0"
                                     alt="" height="150px" width="150px">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">YouTube</h5>
                                <p class="card-text">Subscribe to our YouTube so you won't miss an episode!</p>
                                <a href="https://m.youtube.com/channel/UCNpZoy0ZhftWVx4t5oifPhw" target="_blank"
                                   class="btn btn-sm btn-primary">Take Me There!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="https://www.facebook.com/The-Rhys-and-James-Show-101263594602731" target="_blank">
                                <img class="mx-auto d-block"
                                     src="https://lh3.googleusercontent.com/l0GO8KtEq6iBEoOPalmSwTMWf-krAwDMRvFK_ZajozwaeV3DX5XrwZuRZOW1ud3YEMxeToKXFRWSO0LTCygOnyVrusLGFVgAlpvO66YGEN4hcLyKdWFIJi-qE298_LNW3WnmSYD_zP-2zU-98eGiVDpZjB8A8RPSLUvOokTB8hU9cJGLPvvLbXUQfDEsbOSTuRkKE4q9H91R3CAl5z7W8ErgJUMrYARDeu67pnFWx8SWWbGrCnT3iIErK-iEArgD42nxeEOhZAp9TS-HwOB4zVIWMAGXmXmALYpWAYR_msBltQn_UhNUMt7RBg-RvbtPiJ4J7wfi0sP_0GY-JEkblci3il2Mr5Z39NEmwr_qLkmmdyybk0XJc3W4t7et9Hxkpsz4zL1Sp3-Xi-kLVpN1_U9h9bNX56lbNpeFxa393k8iqmPJxvO-uJM_y6EgI2Wt36YRSofzT46RS2_hsAF2-8H6hb56iiBEgSOeY5-dIrtEcTndGWbQ6u7I0anelRQ7hvZn_d_DsxdZU6MEp9EfZiyfDNjq-bBHQ9e7oN4Pd0GyGOxzpn7Oyv8qgCs4Ynal2ssQbuPqMBBNWXWIvXvZnZTM2uhp-77Qwtp8d_gJOR4MNmb3l2COKmyHR9BX8RcaTxq1DZ2PvTqkJsVqhEd49OPvPhZA6eqclaZ-PKiaRPY0Ytzv3OcLYl-LGn9fDg=w200-h300-no?authuser=0"
                                     alt="" height="150px" width="150px">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Facebook</h5>
                                <p class="card-text">Give us a Like on Facebook and share the page with your
                                    friends!</p>
                                <a href="https://www.facebook.com/The-Rhys-and-James-Show-101263594602731"
                                   target="_blank"
                                   class="btn btn-sm btn-primary">Let's Go!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="https://www.instagram.com/rhyskhan16/" target="_blank">
                                <img class="mx-auto d-block"
                                     src="https://lh3.googleusercontent.com/Vh6fVLMV7-vPS7kzdtltATl_MOzPRuhXKx9jXDb_KSF_1F25PCCIS6QZe38Mtq_cnYEFDAs_qtmgBzXob39Bk0Zwb0irENFGCqmqrdGlCgWZ40UtUsBtnkd_6SGJwtv0SqCO_w44iMe9y83pA-ZDKqz6OFN713lAR54VkO8VNgbNMYMju71DSfhKGpKsi6Ig_xb47ilKnnDEtQcXeDQ7lpr4OX6HfMAaWtaftVYPCL5OvElDfYiiVCTd9juIspBTDyIEkn4Qf_waPJq9hDU-hPXkKfJN4CirCVK8nV74wp9sgjQUEaswWhZOQZjn0q35Jj4Gy16mi4fxfJRk5iScZ2fZwmyYfYPTEeq3SV3Nlky7IHDbTwov7np7ZAAnSCf79C1p4ilAhhsQOwYONCJTo2xQ89f3q7JveIMBcXV2zuZkFUfErxM-OTjthIR58jc72znYkb7x5O3hLAMlZYphjApbmodqB64t7tnQ-oEQWuNVX_ZNnqdc--yBdBtNDEMkCgqDxXaIWR5-COfq0Xnzy82ghKBMYqXySMq78M4EMi8WeJE96IXmLpSP1rXF9kjHc77M3vUud-ZuQTtsubc-GOZiRzC8YrFV8Xg4I6hjB5cnX1zzwVovExYOHuCeio6SSCb69v_sCv-EimngsY41cP9qJszHhylXa2M9qUtoqVIIpC9zouJUaE9YDpgLOw=w200-h300-no?authuser=0"
                                     alt="" height="150px" width="150px">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Instagram</h5>
                                <p class="card-text">Follow us on Instagram to see what we get up to!</p>
                                <a href="https://www.instagram.com/rhyskhan16/" target="_blank"
                                   class="btn btn-sm btn-primary">Let Me
                                    See!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

