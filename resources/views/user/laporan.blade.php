@extends('layout.tampilan')

@section('title','Laporan!')

@section('content')

<footer class="footer-area relative sky-bg" id="kelolaregistrasi-form">
<div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Cetak laporan</h2>
                            <p>Cetak Laporan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir No. 47 Kota Bandung, Jawab Barat <br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">(022) 2016907</a> <br />
                                    <a href="callto:8801687420471">(022) 2017204</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">corporate_comm@telkom.co.id</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/users" class="contact-form" method="post" id="registration-form">
                            @csrf                          
                            <div class="form-group">
                                <label for="Program">Program Pelatihan Telkom CorpU</label>
                                <select class="form-control" name="select-program" id="select-program">
                                <option value="Pelatihan Kepemimpinan">Pelatihan Kepemimpinan</option>
                                <option value="Pelatihan Digital">Pelatihan Digital Learning</option>
                                <option value="Pelatihan Kampiun">Pelatihan Kampiun</option>
                                </select>                  
                            <div class="form-group"> 
                            <!-- <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea> -->
                            <form action="/users/{{$user->program}}" method="post">
                            <input type="hidden" name="_method" value="">
                            <button type="submit" class="btn btn-success" value="post">Lihat Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
    </footer>
@endsection