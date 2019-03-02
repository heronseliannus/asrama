@extends('layout/tampilan')

@section('title','form kelola nilai')


@section('content')
<footer class="footer-area relative sky-bg" id="kelolanilai-form">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>From Registrasi Admin</h2>
                            <p>Input Registrasi Peserta Pelatihan</p>
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
                                <p><strong>Alamat: </strong> Jl. Gegerkalong Hilir No. 47 Kota Bandung, Jawab Barat <br />Indonesia</p>
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
                    <form action="/admins" class="kelola-nilai-form" method="post" id="kelolanilai-form">
                    @csrf
                            <div class="form-double">
                                <input type="text" id="form-firstname" name="form-firstname" placeholder="First name" class="form-control" required="required">
                                <input type="text" id="form-lastname" name="form-lastname" placeholder="Last name" class="form-control" required="required">
                            </div>
                            <input type="text" id="form-nilai1" name="form-nilai1" class="form-control" placeholder="Nilai 1">
                            <input type="text" id="form-nilai2" name="form-nilai2" class="form-control" placeholder="Nilai 2">
                            <input type="text" id="form-nilai3" name="form-nilai3" class="form-control" placeholder="Nilai 3">
                            <input type="text" id="form-nilai4" name="form-nilai4" class="form-control" placeholder="Nilai 4">                                                   
                            <!-- <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea> -->
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="submit" class="btn btn-info">Hapus</button>
                            <button type="submit" class="btn btn-warning">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
    </footer>
@endsection