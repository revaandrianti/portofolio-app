<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio Reva Andrianti</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f6f9;
    color:#333;
}

header{
    background:#1e3a8a;
    color:white;
    padding:20px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:sticky;
    top:0;
}

header ul{
    display:flex;
    list-style:none;
}

header ul li{
    margin-left:25px;
}

header ul li a{
    color:white;
    text-decoration:none;
    font-weight:500;
}

.hero{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:50px;
    gap:50px;
}
.hero img{
    width:280px;
    height:280px;
    border-radius:50%;
    object-fit:cover;
    box-shadow:0 0 30px rgba(0,0,0,.2);
}

.hero-text h1{
    font-size:50px;
    color:#1e3a8a;
}

.hero-text h2{
    margin:15px 0;
    color:#555;
}

.btn{
    display:inline-block;
    margin-top:20px;
    background:#1e3a8a;
    color:white;
    padding:12px 25px;
    border-radius:8px;
    text-decoration:none;
}

section{
    padding:80px 10%;
}

.title{
    text-align:center;
    font-size:48px;
    color:#1e3a8a;
    margin-bottom:40px;
}

.about-container{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:30px;
    margin-top:20px;
}

.card{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.card h3{
    margin-bottom:20px;
    color:#1e3a8a;
}

.info p{
    margin-bottom:18px;
    line-height:1.7;
}

.profil{
    line-height:1.8;
    text-align:justify;
    color:#444;
}

@media (max-width:768px){

    .about-container{
        grid-template-columns:1fr;
    }

}
.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
}

.skill{
    margin-bottom:20px;
}

.skill p{
    margin-bottom:8px;
}

.bar{
    background:#ddd;
    height:12px;
    border-radius:20px;
}

.fill{
    background:#1e3a8a;
    height:12px;
    border-radius:20px;
}

.section-title{
    text-align:center;
    font-size:40px;
    color:#1e3a8a;
    margin-bottom:50px;
}

.project-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
    padding:20px;
}

.project-card{
    background:white;
    border-radius:15px;
    overflow:hidden;
    transition:0.4s;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.project-card:hover{
    transform:translateY(-5px);
}

.project-card img{
    width:100%;
    height:160px; /* lebih kecil */
    object-fit:cover;
}

.project-content{
    padding:15px;
}

.project-content h3{
    color:#1e3a8a;
    margin-bottom:10px;
    font-size:20px;
}

.project-content p{
    color:#444; /* deskripsi tidak putih */
    line-height:1.6;
    font-size:14px;
    margin-bottom:15px;
}

.tech{
    background:#2563eb;
    color:white;
    padding:8px;
    border-radius:8px;
    text-align:center;
    font-size:13px;
    font-weight:bold;
}

.tech{
    background:#2563eb;
    padding:10px;
    border-radius:10px;
    text-align:center;
    font-size:14px;
    font-weight:bold;
}
.contact-buttons{
    display:flex;
    gap:20px;
    justify-content:center;
}

.contact-buttons a{
    padding:15px 25px;
    border-radius:12px;
    text-decoration:none;
    color:white;
    font-weight:bold;
}

.wa{
    background:#25D366;
}

.email{
    background:#ea4335;
}

.ig{
    background:#f7c531;
    color:black !important;

}

footer{
    background:#1e3a8a;
    color:white;
    text-align:center;
    padding:20px;
}

@media(max-width:768px){

.hero{
    flex-direction:column;
    text-align:center;
}

.about{
    grid-template-columns:1fr;
}

.hero img{
    width:220px;
    height:220px;
}
}
</style>
</head>
<body>

<header>
    <h2>My Portfolio</h2>

    <ul>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#skills">Skill</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>
</header>

<section class="hero">

    <!-- Ganti profile.jpg dengan foto kamu -->
    <img src="{{ asset('images/profil.jpg.jpeg') }}" alt="Profile">

    <div class="hero-text">
        <h1>Reva Andrianti</h1>
        <h2>Mahasiswa Teknik Informatika</h2>

        <p>
            Universitas Malikussaleh | Semester 4
        </p>

        <a href="#contact" class="btn">
            Hubungi Saya
        </a>
    </div>

</section>

<section id="about">

    <h2 class="title">Tentang Saya</h2>

    <div class="about-container">

        <!-- Biodata -->
        <div class="card">
            <h3>👤 Biodata</h3>

            <div class="info">
                <p><strong>Nama</strong><br>Reva Andrianti</p>

                <p><strong>NIM</strong><br>240170056</p>

                <p><strong>Program Studi</strong><br>Teknik Informatika</p>

                <p><strong>Universitas</strong><br>Malikussaleh</p>

                <p><strong>Semester</strong><br>4</p>
            </div>
        </div>

        <!-- Profil -->
        <div class="card">
            <h3>💡 Profil Singkat</h3>

            <p class="profil">
                Saya merupakan mahasiswa Teknik Informatika Universitas Malikussaleh yang memiliki minat dalam bidang pengembangan web, pemrograman, dan teknologi informasi. Saya terus mengembangkan kemampuan di bidang HTML, CSS, PHP, Laravel, Java, serta Internet of Things (IoT) melalui berbagai proyek dan pengalaman belajar.
            </p>
        </div>

    </div>

</section>

</section>

<section id="skills">

    <h2 class="title">Skill</h2>

    <div class="card">

        <div class="skill">
            <p>HTML - 90%</p>
            <div class="bar">
                <div class="fill" style="width:90%"></div>
            </div>
        </div>

        <div class="skill">
            <p>CSS - 85%</p>
            <div class="bar">
                <div class="fill" style="width:85%"></div>
            </div>
        </div>

        <div class="skill">
            <p>PHP - 80%</p>
            <div class="bar">
                <div class="fill" style="width:80%"></div>
            </div>
        </div>

        <div class="skill">
            <p>Laravel - 75%</p>
            <div class="bar">
                <div class="fill" style="width:75%"></div>
            </div>
        </div>

        <div class="skill">
            <p>Java - 75%</p>
            <div class="bar">
                <div class="fill" style="width:75%"></div>
            </div>
        </div>

    </div>

</section>

<section id="project">

    <h2 class="title">Project Saya</h2>

    <div class="project-container">

        <!-- Project 1 -->
        <div class="project-card">

            <img src="{{ asset('images/siswa.jpg.png') }}" alt="Sistem Informasi Data Siswa">

            <div class="project-content">
                <h3>Sistem Informasi Data Siswa</h3>

                <p>
                    Website untuk mengelola data siswa, menampilkan informasi
                    akademik, dan mempermudah pengolahan data sekolah.
                </p>

                <div class="tech">
                    HTML • CSS • PHP
                </div>
            </div>

        </div>

        <!-- Project 2 -->
        <div class="project-card">

            <img src="{{ asset('images/kunci-digital.jpg.png') }}" alt="Kunci Digital Arduino">

            <div class="project-content">
                <h3>Kunci Digital Berbasis Arduino dan Proteus</h3>

                <p>
                    Sistem keamanan pintu menggunakan keypad, LCD,
                    dan Arduino yang disimulasikan menggunakan Proteus.
                </p>

                <div class="tech">
                    Arduino • Proteus
                </div>
            </div>

        </div>

        <!-- Project 3 -->
        <div class="project-card">

            <img src="{{ asset('images/monitoring-tanah.jpg.png') }}" alt="Monitoring Kelembapan Tanah">

            <div class="project-content">
                <h3>Sistem Monitoring Kelembapan Tanah</h3>

                <p>
                    Sistem monitoring kelembapan tanah menggunakan sensor
                    soil moisture untuk membantu pengelolaan tanaman.
                </p>

                <div class="tech">
                    Arduino • IoT • Sensor Soil Moisture
                </div>
            </div>

        </div>

    </div>

</section>

<section id="contact">

<div class="card contact">

<div class="contact-buttons">

<a class="wa"
href="https://wa.me/6285261186924"
target="_blank">

WhatsApp

</a>

<a class="email"
href="mailto:reva.240170056@mhs.unimal.ac.id">

Email

</a>

<a class="ig"
href="https://instagram.com/rvndrnti"
target="_blank">

Instagram

</a>

</div>

</section>

<footer>
    © 2026 Reva Andrianti | Teknik Informatika Universitas Malikussaleh
</footer>

</body>
</html>