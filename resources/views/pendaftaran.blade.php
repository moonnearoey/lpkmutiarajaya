@extends('layout.navbar')

<script>
    function kirimKeWhatsApp() {
        // Ambil data dari formulir
        const nama = document.getElementById("nama").value;
        const email = document.getElementById("email").value;
        const telepon = document.getElementById("telepon").value;
        const agama = document.getElementById("agama").value;
        const tempatlahir = document.getElementById("tempatlahir").value;
        const tanggallahir = document.getElementById("tanggallahir").value;
        const alamat = document.getElementById("alamat").value;


        // Pastikan formulir diisi
        if (!nama || !email || !telepon || !agama || !tempatlahir || !tanggallahir || !alamat) {
            alert("Semua kolom harus diisi!");
            return false;
        }

        // Membuat pesan yang akan dikirim ke WhatsApp
        const pesan =
            `Silahkan isi formulir pendaftaran untuk pelatihan / kursus di LPK "Mutiara Jaya" dan pastikan data yang anda masukkan benar...\n\nNama: ${nama}\nEmail: ${email}\nTelepon: ${telepon}\nAgama ${agama}\nTempatlahir: ${tempatlahir}\nTanggallahir: ${tanggallahir}\nAlamat: ${alamat}`;

        // URL WhatsApp API dengan pesan yang ter-encode
        const url = `https://wa.me/6281297613997?text=${encodeURIComponent(pesan)}`;

        // Arahkan pengguna ke URL WhatsApp
        window.open(url, "_blank");
        return false; // Mencegah pengiriman formulir standar
    }
</script>

@section('body')
    <div style="text-align: justify" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Pendaftaran</p>
                    <h1 class="mb-3">Daftarkan diri Anda segera di LPK "MUTIARA JAYA"</h1>
                    <p style="text-indent: 30px" class="mb-2">Sebuah mahakarya yang luar biasa nan spektakuler dari manusia
                        adalah terciptanya sebuah pakaian. Dengan pakaian manusia mampu menutupi apa yang sepantasnya
                        ditutupi. Dengan pakaian mampu membuat badan menjadi hangat. Dan pakaian pulalah kita bisa tampil
                        lebih cantik dan rupawan. Pakaian berasal dari proses jahit-menjahit maka tidak ada salahnya jika
                        kita belajar menjahit.</p>
                    <p style="text-indent: 30px" class="mb-2">Bergabunglah bersama kami dan belajar di LPK "Mutiara Jaya"
                        dan Tingkatkan keahlianmu. Miliki keterampilan yang luar biasa agar menjadi seorang yang mumpuni
                        agar bisa berwirausaha mandiri serta mampu bersaing di dunia kerja maupun industri.</p>
                    <p style="text-indent: 30px" class="mb-2">Anda bisa mendaftar langsung ke alamat kantor LPK "Mutiara
                        Jaya", Jl. Irian Jaya RT 04 / RW 03 Desa Banjaran, Kecamatan Taman, Kabupaten Pemalang 52361,
                        Provinsi Jawa Tengah, atau bisa melalui nomor telepon / Whatsapp <a
                            href="https://wa.me/+6287881986716">087881986716</a> serta melalui e-mail <a
                            href="mailto:lpkmutiarajaya@gmail.com">lpkmutiarajaya@gmai.com</a> dan bisa juga mengisi
                        formulir di website LPK "Mutiara Jaya".</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form onsubmit="return kirimKeWhatsApp()">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="telepon" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="telepon" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="agama" class="form-label">Agama</label>
                                    <select class="form-control" id="agama" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggallahir" required>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-50 py-3 mt-4" type="submit"><strong>Daftar</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
