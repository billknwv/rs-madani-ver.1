@extends('layouts.app')

@section('title', 'Sambutan Direktur RSUD Madani Palu')

@section('content')
    @include('profil._header', ['title' => 'Sambutan Direktur', 'icon' => 'person'])

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    @include('profil._sidebar')
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row align-items-start g-4">
                                <div class="col-md-4 text-center">
                                    <div class="direktur-photo mb-3">
                                        <div class="avatar-placeholder-lg mx-auto">
                                            <i class="bi bi-person-badge fs-1"></i>
                                        </div>
                                    </div>
                                    <h5>dr. Hairudin, S.Ked., M.K.M</h5>
                                    <p class="text-muted small">Direktur RSUD Madani Palu</p>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="fw-bold mb-4">Sambutan Direktur Utama</h2>
                                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                                    <p>Segala puji bagi Allah SWT atas segala rahmat dan karunia-Nya sehingga RSUD Madani Palu dapat terus berkembang dan memberikan pelayanan kesehatan terbaik bagi masyarakat.</p>
                                    <p>Sebagai Direktur RSUD Madani Palu, saya merasa bangga dan bersyukur dapat memimpin rumah sakit yang memiliki komitmen kuat dalam memberikan pelayanan kesehatan yang paripurna. Kami percaya bahwa kesehatan adalah investasi terpenting dalam hidup, dan RSUD Madani Palu hadir untuk menjadi mitra terpercaya dalam menjaga kesehatan Anda.</p>
                                    <p>Dengan didukung oleh tenaga medis yang profesional dan berpengalaman, serta peralatan medis yang modern, kami siap memberikan pelayanan kesehatan yang komprehensif. Kami juga terus berinovasi dalam pelayanan untuk memenuhi kebutuhan pasien yang semakin beragam.</p>
                                    <p>Kami mengucapkan terima kasih atas kepercayaan yang telah diberikan kepada RSUD Madani Palu. Doa dan dukungan Anda menjadi motivasi bagi kami untuk terus meningkatkan kualitas pelayanan.</p>
                                    <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                                    <p class="fw-bold mt-4">dr. Hairudin, S.Ked., M.K.M</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
