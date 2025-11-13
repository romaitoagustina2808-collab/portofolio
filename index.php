<?php
// ==============================
// Portofolio — Romaito Agustina Silaen (Final + Ikon Sosial Fix)
// ==============================

$profile = [
  'name' => 'Halo semuanyaa, saya Romaito Agustina Silaen !',
  'title' => 'Computer Technology Student',
  'bio' => 'Saya adalah mahasiswa D3 Teknologi Komputer di Institut Teknologi Del dengan ketertarikan besar pada pengembangan sistem berbasis Internet of Things (IoT), Cloud Computing, dan Web Development. Saya percaya bahwa teknologi dapat menjadi solusi nyata untuk meningkatkan efisiensi dan kualitas hidup manusia.',
  'intro' => 'Saya senang mengeksplorasi ide-ide baru dan mengubahnya menjadi solusi digital yang berdampak. Dengan pengalaman dalam proyek berbasis IoT dan aplikasi web, saya terbiasa bekerja secara kolaboratif, berpikir analitis, dan selalu berorientasi pada hasil.',
  'email' => 'romaitoagustina2808@gmail.com',
  'address' => 'Desa Sitouama, Laguboti, Toba, Sumatera Utara',
  'instagram' => 'https://www.instagram.com/romaitoagustina',
  'linkedin' => 'https://www.linkedin.com/in/romaito-silaen-09a10331a',
  'photo' => 'romaito.png',
  'cv' => 'Romaito Silaen_CV.pdf'
];

$projects = [
  [
    'title' => 'Website Puskesmas Janji Matogu',
    'desc' => 'Website informatif berbasis PHP & MySQL untuk mempublikasikan layanan, artikel kesehatan, dan profil tenaga medis. Dilengkapi panel admin untuk manajemen data dinamis seperti jadwal dokter dan berita kesehatan, membantu puskesmas dalam digitalisasi pelayanan publik.',
    'tags' => ['PHP','MySQL','Bootstrap','Admin Panel'],
    'images' => ['puskesmas1.jpg','puskesmas2.jpg','puskesmas3.jpg']
  ],
  [
    'title' => 'Automatic Smart Home System for Classroom',
    'desc' => 'Sistem otomasi ruang kelas berbasis Arduino Uno dengan sensor DHT11, LDR, dan Ultrasonic. Lampu dan kipas otomatis aktif berdasarkan suhu, intensitas cahaya, serta keberadaan manusia. Mendukung efisiensi energi dan kenyamanan belajar.',
    'tags' => ['IoT','Arduino','Sensor','Automation'],
    'images' => ['sistan1.jpg','sistan2.jpg']
  ],
  [
    'title' => 'Waste Cleaning System Prototype (Lake Toba)',
    'desc' => 'Prototipe kapal pembersih sampah berbasis ESP8266 dan motor DC, dikendalikan lewat antarmuka web. Menggunakan sensor ultrasonik untuk navigasi otomatis di permukaan air, mendukung konservasi Danau Toba dan kebersihan lingkungan perairan.',
    'tags' => ['IoT','ESP8266','Web Control','Environment'],
    'images' => ['pa2.jpg','pa2_1.jpg','pa2_3.jpg']
  ]
];

$organizations = [
  [
    'name'=>'BEM Institut Teknologi Del',
    'year'=>'2024 - Sekarang',
    'desc'=>'Sebagai anggota Departemen Ketertiban dan Disiplin, saya berperan menjaga kedisiplinan mahasiswa dan membantu menegakkan tata tertib kampus.',
    'image'=>'dp.jpg'
  ],
  [
    'name'=>'HIMATEK (Himpunan Mahasiswa Teknologi Komputer)',
    'year'=>'2023 - Sekarang',
    'desc'=>'Aktif dalam kegiatan akademik dan non-akademik, membantu pelaksanaan seminar, pelatihan, dan acara untuk mahasiswa Teknologi Komputer.',
    'image'=>'himatek.jpg'
  ]
];

$skills = [
  'Hard Skills' => ['PHP','HTML','CSS','JavaScript','MySQL','Python','C','Networking','IoT & Embedded Systems','Web Development','Solidworks'],
  'Soft Skills' => ['Problem Solving','Teamwork','Time Management','Adaptability']
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo $profile['name']; ?> — Portofolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
:root {
  --primary: #7c3aed;
  --secondary: #06b6d4;
  --bg-dark: #0f172a;
  --text-light: #e2e8f0;
  --card-bg: rgba(255,255,255,0.06);
  --hover-glow: 0 0 25px rgba(124,58,237,0.5);
}

body {
  margin:0;
  font-family:'Poppins',sans-serif;
  background:linear-gradient(180deg,var(--bg-dark),#1e1b4b);
  color:var(--text-light);
  line-height:1.7;
}

header {
  background:linear-gradient(90deg,var(--primary),var(--secondary));
  padding:60px 20px;
  text-align:center;
  box-shadow:0 0 40px rgba(0,0,0,0.3);
}
header img {
  width:140px; height:140px; border-radius:50%;
  border:5px solid #fff; box-shadow:var(--hover-glow);
}
header h1 { margin:14px 0 6px; color:#fff; font-size:28px; }
header p { color:#e0e7ff; margin:4px 0; }
header .links a {
  display:inline-block; margin:8px 10px; padding:10px 20px;
  border-radius:25px; background:#fff; color:#1e1b4b;
  font-weight:600; transition:.3s;
}
header .links a:hover {
  background:var(--secondary); color:#fff; transform:translateY(-3px); box-shadow:var(--hover-glow);
}

.container {
  max-width:1100px; margin:50px auto; padding:0 20px;
}
.card {
  background:var(--card-bg);
  padding:24px; margin-bottom:30px;
  border-radius:15px; box-shadow:0 5px 25px rgba(0,0,0,.25);
  transition:.3s;
}
.card:hover { box-shadow:var(--hover-glow); transform:translateY(-4px); }

h2 {
  color:#fff; margin-top:0; border-left:5px solid var(--secondary); padding-left:10px;
}

.project .gallery {
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  gap:14px;
  margin-top:15px;
}
.project img {
  width:150px; height:150px;
  border-radius:10px;
  object-fit:cover;
  cursor:pointer;
  transition:transform .3s, box-shadow .3s;
}
.project img:hover {
  transform:scale(1.07);
  box-shadow:var(--hover-glow);
}
.project p { color:#cbd5e1; font-size:15px; text-align:justify; }

.tag {
  display:inline-block; margin:4px 6px 0 0; padding:4px 10px;
  background:linear-gradient(90deg,var(--primary),var(--secondary));
  border-radius:12px; color:#fff; font-weight:600; font-size:12px;
}

.org-card {
  display:flex; align-items:center; gap:18px;
  background:var(--card-bg); padding:14px;
  border-radius:12px; margin-bottom:18px;
  box-shadow:0 2px 12px rgba(0,0,0,0.2); transition:.3s;
}
.org-card:hover { box-shadow:var(--hover-glow); }
.org-img {
  width:90px; height:90px; border-radius:10px; object-fit:cover;
}
.org-content b { font-size:16px; color:#fff; }
.org-content small { color:#a5b4fc; }
.org-content p { margin:4px 0; color:#cbd5e1; font-size:13px; }

.footer {
  text-align:center; padding:30px;
  background:#0b1120; border-top:1px solid rgba(255,255,255,0.08); margin-top:40px;
}
.footer .social {
  display:flex; justify-content:center; gap:30px; margin-top:14px; flex-wrap:wrap;
}
.footer a {
  display:inline-flex; align-items:center; gap:8px;
  color:var(--secondary); font-weight:600;
  transition:.3s;
}
.footer a:hover { color:var(--primary); transform:translateY(-3px); }
.icon { width:22px; height:22px; fill:currentColor; }

.modal {
  display:none; position:fixed; z-index:1000; left:0; top:0;
  width:100%; height:100%; background:rgba(0,0,0,0.9);
  justify-content:center; align-items:center;
}
.modal img {
  max-width:90%; max-height:90%;
  border-radius:10px; box-shadow:0 0 30px rgba(255,255,255,0.3);
}
.modal.show { display:flex; animation:fadeIn .3s ease-in-out; }
@keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
</style>
</head>
<body>

<header>
  <img src="<?php echo $profile['photo']; ?>" alt="Foto <?php echo $profile['name']; ?>">
  <h1><?php echo $profile['name']; ?></h1>
  <p><b><?php echo $profile['title']; ?></b></p>
  <p><?php echo $profile['bio']; ?></p>
  <p><i>"<?php echo $profile['intro']; ?>"</i></p>
  <div class="links">
    <a href="<?php echo $profile['cv']; ?>" download>⬇️ Unduh CV</a>
  </div>
</header>

<div class="container">
  <div class="card">
    <h2>💡 Proyek Unggulan</h2>
    <?php foreach($projects as $p): ?>
    <div class="project">
      <b style="font-size:17px;color:#fff;"><?php echo $p['title']; ?></b>
      <p><?php echo $p['desc']; ?></p>
      <?php foreach($p['tags'] as $t): ?><span class="tag"><?php echo $t; ?></span><?php endforeach; ?>
      <div class="gallery">
        <?php foreach($p['images'] as $img): ?>
          <img src="<?php echo $img; ?>" alt="Gambar proyek" onclick="openModal(this.src)">
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="card">
    <h2>🧠 Keahlian</h2>
    <b>Hard Skills:</b><br><?php echo implode(', ', $skills['Hard Skills']); ?><br><br>
    <b>Soft Skills:</b><br><?php echo implode(', ', $skills['Soft Skills']); ?>
  </div>

  <div class="card">
    <h2>👥 Organisasi</h2>
    <?php foreach($organizations as $o): ?>
      <div class="org-card">
        <img class="org-img" src="<?php echo $o['image']; ?>" alt="<?php echo $o['name']; ?>">
        <div class="org-content">
          <b><?php echo $o['name']; ?></b><br>
          <small><?php echo $o['year']; ?></small>
          <p><?php echo $o['desc']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="footer">
  <div>📍 <b>Alamat:</b> <?php echo $profile['address']; ?></div>
  <div class="social">
    <!-- Email -->
    <a href="mailto:<?php echo $profile['email']; ?>">
      <svg class="icon" viewBox="0 0 24 24"><path d="M12 13L2 6v12h20V6l-10 7zM2 4l10 7 10-7H2z"/></svg>
      Email
    </a>

    <!-- Instagram -->
    <a href="<?php echo $profile['instagram']; ?>" target="_blank">
      <svg class="icon" viewBox="0 0 24 24"><path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.8-.9a1 1 0 100 2 1 1 0 000-2z"/></svg>
      Instagram
    </a>

    <!-- LinkedIn -->
    <a href="<?php echo $profile['linkedin']; ?>" target="_blank">
      <svg class="icon" viewBox="0 0 24 24">
        <path d="M4 3a2 2 0 012-2h12a2 2 0 012 2v18a2 2 0 01-2 2H6a2 2 0 01-2-2V3zm4.3 6.7
                 a1.8 1.8 0 110-3.6 1.8 1.8 0 010 3.6zm-.9 2.3h1.8v9H7.4v-9zm3.8 0h1.7v1.3h.1
                 a1.9 1.9 0 011.7-.9c1.8 0 2.1 1.1 2.1 2.5v6.1h-1.8v-5.4
                 c0-.8-.1-1.4-1-1.4-.8 0-1.1.6-1.1 1.3v5.5h-1.8v-9z"/>
      </svg>
      LinkedIn
    </a>
  </div>
  <div style="margin-top:10px; color:#94a3b8;">
    © <?php echo date('Y'); ?> <?php echo $profile['name']; ?>
  </div>
</div>

<div class="modal" id="imgModal" onclick="this.classList.remove('show')">
  <img src="">
</div>

<script>
function openModal(src){
  const modal=document.getElementById('imgModal');
  modal.querySelector('img').src=src;
  modal.classList.add('show');
}
</script>

</body>
</html>
