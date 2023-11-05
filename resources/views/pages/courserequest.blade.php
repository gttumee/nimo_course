@extends('layouts.layout')
@section('title', 'Бүртгэл')
@section('content')
    <main>
        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('course') }}" id="research-form" method="POST" role="form">
                                @csrf
                            <h3 class="mb-4">Сургалтанд Бүртгүүлэх</h3>

                            <div class="row">


                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Сургалт сонгох</h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio" name="option" value="n5"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Анхан N5,N4
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio"  name="option" value="n3"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Дунд N3
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio"  name="option" value="n2"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Дээд N2
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                    <div class="form-check form-check-radio">
                                        <input class="form-check-input" type="radio"  name="option" value="n1"
                                            id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            Ахисан N1
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Мэдээлэл оруулах</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="firstname" id="donation-name" class="form-control"
                                        placeholder="Овог" required>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="lastname" id="donation-email"
                                        class="form-control" placeholder="Нэр" required>
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="И-мэйл" required>
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <input type="text" name="phone" id="phone"
                                       class="form-control" placeholder="Утас" required>
                                </div>
                                <div class="col-lg-12 col-12 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  name="job_option" value="job"
                                            id="flexRadioDefault9">
                                        <label class="form-check-label" for="flexRadioDefault9">
                                            Ажилладаг
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  name="job_option" value="study"
                                            id="flexRadioDefault10">
                                        <label class="form-check-label" for="flexRadioDefault10">
                                            Сурдаг
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="job_option" value="other"
                                            id="flexRadioDefault10">
                                        <label class="form-check-label" for="flexRadioDefault10">
                                            Бусад
                                        </label>
                                    </div>
                                    <button type="submit" class="form-control mt-4">Бүртгүүлэх</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection