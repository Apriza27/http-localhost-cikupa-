<head>

<link rel="shortcut icon" href="LOGOWEB.png">

<title>Web Resmi X-Sports ID</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}
ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}
</style>
</head>
<div class="w3-container w3-center w3-padding-16" style="background-color:#333;">
<div class="w3-container w3-center w3-animate-top">
<img src="logox.png" height="110" width="160">
<div class="w3-container w3-center w3-animate-bottom">
  <h1 class="w3-text-white" align="center">TEST DONG</h1>
</div>
</div>
</div>
<div class="w3-center w3-text-white w3-border-top w3-border-black w3-padding-small" style="background-color:#333;">
<div class="w3-container w3-center w3-animate-left">
  <a href="index.php" class="w3-bar-item w3-button w3-hover-red">Beranda</a>
 
   
        <div class="w3-dropdown-hover w3-hover-red">
	  <button class="w3-text-white w3-button w3-hover-red" style="background-color:#333;">Tentang</button>
	  <div class="w3-text-white w3-dropdown-content w3-bar-block w3-card-4" style="background-color:#333;">
        <a href="visi.php" class="w3-bar-item w3-button w3-hover-red">Visi Misi</a>
        <a href="letak.php" class="w3-bar-item w3-button w3-hover-red">Letak Geografis</a>
        <a href="tujuan.php" class="w3-bar-item w3-button w3-hover-red">Tujuan Dan Sasaran</a>
        <a href="maps.php" class="w3-bar-item w3-button w3-hover-red">Maps</a>
      </div>
      </div>
 
  <div class="w3-dropdown-hover w3-hover-red">
      <button class="w3-text-white w3-button w3-hover-red" style="background-color:#333;">Venue & Circuit</button>
      <div class="w3-text-white w3-dropdown-content w3-bar-block w3-card-4" style="background-color:#333;">
        <a href="kelurahan.php" class="w3-bar-item w3-button w3-hover-red">Bike Park BMX</a>
        <a href="struktur.php" class="w3-bar-item w3-button w3-hover-red">Bike Park DH</a>
		<a href="komentar.php" class="w3-bar-item w3-button w3-hover-red">Saran Anda</a>
      </div>
    </div>

	  <div class="w3-dropdown-hover w3-hover-red">
      <button class="w3-text-white w3-button w3-hover-red" style="background-color:#333;">Event & Competition</button>
      <div class="w3-text-white w3-dropdown-content w3-bar-block w3-card-4" style="background-color:#333;">
  <a href="kepadatan.php" class="w3-bar-item w3-button w3-hover-red">Downhill, MTB</a>
  <a href="umurgrafik.php" class="w3-bar-item w3-button w3-hover-red">BMX, Skateboard</a>
    </div>
    </div>
    </div>

  
  


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4">
      <header class="w3-container w3-dark-grey"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
       <div class="w3-container w3-padding" id="contact">
	   <img src="logox.png" height="110" width="160">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding">Suara Anda</h3>
    <p>Kirim Pertanyaan atau pengaduan untuk diselesaikan oleh kami.</p>
    <form method="post" action="saran_page.php">
      <input class="w3-input w3-border" type="text" placeholder="Nama" required name="nama">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Judul Pertanyaan" required name="subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Pesan" required name="comment">
      <button class="w3-button w3-black w3-section" type="submit"  name="kirimsaran">
        <i class="fa fa-paper-plane"></i> KIRIM SUARA ANDA
      </button>
	  </header>
    </form>
    </div>
	</div>
  </div>
</div>
</div>