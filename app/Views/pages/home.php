<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch">
                <div class="content">
                    <h3>SiKasur</h3>
                    <p>
                        SiKasur Adalah salah satu layanan dari Badan Kepegawaian Daerah khususnya Sub Bidang Data dan Informasi, dimana layanan ini memberikan kemudahan dalam
                        pengusulan Kartu Istri dan Kartu Suami khususnya bagi ASN dilingkungan Pemerintah Provinsi Jambi.

                    </p>
                    <a href="#contact" class="about-btn"><span>Kontak</span> <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Dasar Hukum</h4>
                            <ol>
                                <li>UU No.8 Tahun 1974 JO UU No.43 TAHUN 1999</li>
                                <li>KEPUTUSAN KEPALA BKN NO.155.A/KEP.KA/BKN NO.007/KEP/1988</li>
                            </ol>
                        </div>
                        <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>KELENGKAPAN USUSULAN PENERBITAN KARTU ISTERI / KARTU SUAMI</h4>
                            <ol>
                                <li>SURAT PENGANTAR DARI INSTANSI YANG BERSANGKUTAN</li>
                                <li>PHOTO COPY SK CPNS LEGALISIR (2 RANGKAP)</li>
                                <li>PHOTO COPY SK PNS LEGALISIR (2 RANGKAP)</li>
                                <li>PHOTO COPY SK PANGKAT TERAKHIR LEGALISIR (2 RANGKAP)</li>
                                <li>PHOTO COPY SURAT NIKAH LEGALISIR KUA (2 RANGKAP)</li>
                                <li>PAS PHOTO UKURAN 2X3 SEBANYAK 3 LEMBAR HITAM PUTIH</li>
                                <li>MENGISI FORMULIR YANG DISEDIAKAN, BERIKUT INI FORMULIR KARIS/KARSU <a href="">klik disini</a> </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section><!-- End About Section -->


<!-- ======= Contact Section ======= -->
<section id="Usulan" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Usulan Kartu Suami Kartu Istri</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <!-- <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                    <form action="forms/contact.php" method="post" role="" class="">
                        <div class="inputbox">
                            <input required="required" type="text">
                            <span>Username</span>
                            <i></i>
                            <input class="button" type="button" value="Cari">
                        </div>
                    </form>

            </div>
        </div>

    </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak</h2>
            <p>Untuk Kontak, dapat menghubungi Badan Kepegawaian Daerah Provinsi Jambi Bidang Pengadaan Pemberhentian dan Informasi Kepegawaian Sub Bidang Data
                dan Information Dibawah ini :
            </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>Jalan RM Nur Admadibrata No.2 Telanaipura Jambi</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>datinfo.bkd.provjbi@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Hubungi Kami</h3>
                            <p>Taharudin +62 813 6664 0444, Gusninar +62 812 7439 878</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->

<?= $this->endsection(); ?>