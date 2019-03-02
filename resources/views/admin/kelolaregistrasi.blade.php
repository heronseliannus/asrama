@extends('layout.tampilan')

@section('title','Kelola Registrasi Admin!')

@section('content')

<footer class="footer-area relative sky-bg" id="kelolaregistrasi-form">
<div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Kelola Data Admin</h2>
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
                            <div class="form-double">
                                <input type="text" id="form-firstname" name="form-firstname" placeholder="First name" class="form-control" required="required">
                                <input type="text" id="form-lastname" name="form-lastname" placeholder="Last name" class="form-control" required="required">
                            </div>
                            <input type="password" id="form-password" name="form-password" class="form-control" placeholder="Password">
                            <input type="text" id="form-nik" name="form-nik" class="form-control" placeholder="NIK">
                            <div class="form-double">
                                <input type="email" id="form-user-email" name="form-user-email" class="form-control" placeholder="email" required="required">
                                <input type="emailtype" id="form-re-email" name="form-re-email" class="form-control" placeholder="Re-enter email" required="required">                                
                            </div>          

                            <input type="text" id="form-phone-num" name="form-phone-number" class="form-control" placeholder="Phone Number">
                            <div class="form-group">
                            <textarea class="form-control" name="form-address" id="form-address" rows="3"placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="select-city" id="select-city">
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Malang">Malang</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Pontianak">Pontianak</option>
                                </select>
                            </div>               
                            <div class="form-group">
                                <select class="form-control" name="select-state" id="select-state">
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Program">Program Pelatihan Telkom CorpU</label>
                                <select class="form-control" name="select-program" id="select-program">
                                <option value="Pelatihan Kepemimpinan">Pelatihan Kepemimpinan</option>
                                <option value="Pelatihan Digital">Pelatihan Digital Learning</option>
                                <option value="Pelatihan Kampiun">Pelatihan Kampiun</option>
                                </select>                  
                            <div class="form-group">
                                <label for="upload-photo">Upload Photo</label>
                                <input type="file" name="form-photo" id="select-photo" value="image" />
                            </div>
                            <div class="form-group">
                                <label for="gender">Pria</label>
                                <input type="checkbox" aria-label="...">
                                <label for="gender">Wanita</label>
                                <input type="checkbox" aria-label="...">
                            </div>   
                            <label for="date-of-birth">Date of Birth</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control" name="select-date" id="date">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>                                
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="select-month" id="month">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>                                
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="form-date-year" name="form-date-year" placeholder="e.g 1999" class="form-control" required="required">                              
                                </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="gender">Saya menyetujui Syarat dan Ketentuan</label>
                                </div>                                   
                                
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="gender">Saya memberikan hak atas data diri Anda untuk situs Anda</label>
                                </div>                                   

                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="gender">Semua data yang telah disi sesuai dengan data dan ketentuan yang berlaku</label>
                                </div>    
                            <!-- <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea> -->
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="submit"><a class="btn btn-success" herf="http://localhost:8000/users">Lihat Data</a></button>
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