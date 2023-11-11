@extends('layouts.layout')
@section('title', 'Нимо Япон хэл')
@section('content')
    <main>
        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/slide_1.jpg" class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>日本</h1>
                                        <p>Япон улс 130 сая хүн амтай арлын орон
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_2.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>富士山</h1>
                                        <p>Фүжи уул Японы хамгийн өдөр уул 3,776.24м</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_7.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>金閣寺</h1>
                                        <p>Алтан сүм Киото хотод байрлах эртний сүм </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_4.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>東京</h1>
                                        <p>Япон улсын нийслэл Токио хот 14сая хүн амтай</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_5.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>寿司</h1>
                                        <p>Японы үндэсний хоол</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_8.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>新幹線</h1>
                                        <p>Хурдан метро цагт 320км хурдалдаг</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide/slide_9.jpg"
                                        class="carousel-image img-fluid" alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>サクラ</h1>
                                        <p>Сакура 3-р сарын эхнээс цэцэлгэж эхэлдэг</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/group-people-volunteering-foodbank-poor-people.jpg"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Бидний тухай</h2>
                            <h5 class="mb-3">Япон хэл сурах хүсэлтэй залуучууд нэгдээрэй</h5>
                            <p class="mb-0">Бид Япон улсад олон жил ажиллаж амьдарсан хүмүүсээр багаа бүрдүүлсэн</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Манай сургалтууд</h5>
                                    <p>Япон хэлний анхан шатнаас бизнэс төвшин хүртэл суралцах боломжтой</p>
                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            N5,N4 анхан шат
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            N3 дунд шат
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            N2 дээд шат
                                        </li>
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            N1 ахисан шат
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="2023"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>
                                        <span class="counter-text">Байгуулагдсан он</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Mr jonh</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Үүсгэн байгуулагч</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0">Зөвөлгөө<br>Японд ажиллах сурах талаар зөвөлгөө хэрэгтэй юу?</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="#section_4" class="custom-btn btn smoothscroll">Судалдгаа өгөх</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Манай сургалтууд</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/course_2.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">N5,N4 анхан шат</h5>

                                    <p>Энэхүү сургалтаар япон хэл огт мэдэхгүй хүмүүс зориулсан</p>

                                    {{-- <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Төлбөр:</strong>
                                            200,000 төгрөг
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Цаг:</strong>
                                            72 цаг
                                        </p>
                                    </div>
                                </div>

                                <a href="{{route('register')}}" class="custom-btn btn">Бүртгүүлэх</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/course_1.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">N3, N2 Дунд шат</h5>

                                    <p>Япон хэлний суурьтай хүмүүст зориулсан сургалт</p>

                                    {{-- <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Төлбөр:</strong>
                                            250,000 төгрөг
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Цаг:</strong>
                                            72 цаг
                                        </p>
                                    </div>
                                </div>

                                <a href="{{route('register')}}" class="custom-btn btn">Бүртгүүлэх</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="images/causes/course_3.jpg"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">N1 Анхсан төвшин</h5>

                                    <p>Энэхүү шат нь Япон хэлний ахисан төвшин бөгөөд Япон багш хичээл орох болно.
                                    </p>

                                    {{-- <div class="progress mt-4">
                                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Төлбөр:</strong>
                                            300,000 төгрөг
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Цаг:</strong>
                                            72 цаг
                                        </p>
                                    </div>
                                </div>

                                <a href="{{route('register')}}" class="custom-btn btn">Бүртгүүлэх</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-4">Судалгаа</h2>
                            <form class="custom-form volunteer-form mb-5 mb-lg-0" method="POST"  action="{{ route('research') }}" role="form" id="research-form">
                                @csrf
                            <h3 class="mb-4">Та ямар чиглэлээр Япон явах бодолтой байдаг вэ</h3>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="volunteer-name" class="form-control"
                                        placeholder="Өөрийн нэр" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="emailandphone" id="volunteer-email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="И-мэйл эсвэл утас"
                                        required>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <input type="text" name="type" id="volunteer-subject"
                                        class="form-control" placeholder="Чиглэл" required>
                                </div>
                            </div>

                            <textarea name="message" rows="3" class="form-control" id="volunteer-message"
                                placeholder="Дэлгэрэнгүй"></textarea>

                            <button type="submit" class="form-control">Илгээх</button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">Бид танд зөвөлгөө өгнө</h4>

                            <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                                tokito Professional charity theme based</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Сүүлд нэмэгдсэн мэдээ</h2>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 12, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to
                                            urban area</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito
                                        Professional charity theme based on Bootstrap</p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-people-collecting-foodstuff.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Food,
                                    </a>
                                    <a href="#" class="category-block-link">
                                        Donation,
                                    </a>
                                    <a href="#" class="category-block-link">
                                        Caring
                                    </a>
                                </div>
                            </div>
                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 20, 2036
                                        </p>
                                    </div>
                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>
                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            35 Comments
                                        </p>
                                    </div>
                                </div>
                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h4>
                                </div>
                                <div class="news-block-body">
                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus
                                        elementum, tempor risus vel, condimentum orci</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Хайх" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>
                        <h5 class="mt-5 mb-3">Сүүлд үзсэн мэдээ</h5>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/africa-humanitarian-aid-doctor.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a>
                                    </h6>
                                </div>
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/close-up-happy-people-working-together.jpg"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 24, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="category-block d-flex flex-column">
                            <h5 class="mb-3">Ангилал</h5>

                            <a href="#" class="category-block-link">
                                Drinking water
                                <span class="badge">20</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Food Donation
                                <span class="badge">30</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Children Education
                                <span class="badge">10</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Poverty Development
                                <span class="badge">15</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Clothing Donation
                                <span class="badge">20</span>
                            </a>
                        </div>

                        <div class="tags-block">
                            <h5 class="mb-3">Tags</h5>

                            <a href="#" class="tags-block-link">
                                Donation
                            </a>

                            <a href="#" class="tags-block-link">
                                Clothing
                            </a>

                            <a href="#" class="tags-block-link">
                                Food
                            </a>

                            <a href="#" class="tags-block-link">
                                Children
                            </a>

                            <a href="#" class="tags-block-link">
                                Education
                            </a>

                            <a href="#" class="tags-block-link">
                                Poverty
                            </a>

                            <a href="#" class="tags-block-link">
                                Clean Water
                            </a>
                        </div>

                        <form class="custom-form subscribe-form" action="#" method="post" role="form">
                            <h5 class="mb-4">Шинэ мэдээлэл и-мэйлээр авах</h5>

                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="И-мэйл" required>

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">Бүртгүүлэх</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Сурагчдын сэтгэгдэл</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Сайн сургалт</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">түмээ</span>,
                                            Boss</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Сайн сургалт шүү</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                            Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                            Entreprenuer</small>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Холбоо барих</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">mark</p>
                                    <p class="mb-0"><strong>Маркетингийн ажилтан</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Хаяг</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Улаанбаатар Монгол Улс БЗД 5-р хороо
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 305-240-9671">
                                        99445511
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        nimocourses@nimo.mn
                                    </a>
                                </p>

                                <a href="#" class="custom-btn btn mt-3">google map үзэх</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                              <form class="custom-form contact-form" action="{{ route('contact') }}" method="POST" role="form">
                                @csrf
                            <h2>Холбоо барих</h2>

                            <p class="mb-4">и-мэйлээр холбоо бариж болно:
                                <a href="#">nimocourses@nimo.mn</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="firstname" id="first-name" class="form-control"
                                        placeholder="Овог" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="lastname" id="last-name" class="form-control"
                                        placeholder="Нэр" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="И-мэйл" required>
                            <input type="text" name="phone" id="email"  class="form-control"
                                placeholder="Утас" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder=""></textarea>

                            <button type="submit" class="form-control">Илгээх</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>


@endsection
