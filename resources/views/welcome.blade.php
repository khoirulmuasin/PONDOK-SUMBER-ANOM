<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .contact-map {
            width: 100%;
            height: 450px;
        }

        @media (max-width: 767px) {
            .contact-map {
                height: 300px;
            }
        }
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Sumber</b> Anom</a>
    <div class="w3-right w3-hide-small">
      <a href="#galeri" class="w3-bar-item w3-button">Galeri</a>
      <a href="#about" class="w3-bar-item w3-button">Tentang</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

@foreach ($data as $item)
<!-- Header {{$item->titlesatu}} w3-xxlarge-->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="{{ Storage::url($item->image)}}" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>{{$item->titlesatu}}</b></span> <span class="w3-hide-small w3-text-light-grey" ><b>{{$item->titledua}}</b></span></h1>
  </div>
</header>
@endforeach

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
    <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="galeri">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Galeri</h3>
  </div>

<div class="w3-row-padding">
  @foreach ($galeri->take(8) as $item)
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">{{$item->title}}</div>
        <img src="{{ Storage::url($item->image)}}" alt="House" style="width:100%">
      </div>
    </div>
  @endforeach
</div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tentang</h3>
    <p>Selamat datang di Pesantren Sumber Anom, tempat pengembangan spiritual, pendidikan, dan komunitas. Terletak di lingkungan yang tenang di [Lokasi], pesantren kami didedikasikan untuk membina perkembangan holistik dan menyediakan lingkungan yang mendukung bagi individu yang mencari pengetahuan keagamaan dan pendidikan dunia.
    </p>
  </div>

<div class="w3-row-padding w3-grayscale">
  @foreach ($guru->take(4) as $item)
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div style="height: 300px; overflow: hidden;">
        <img src="{{ Storage::url($item->image)}}" alt="John" style="width:100%; object-fit: cover; object-position: 0% 0%;">
      </div>
      <h3>{{$item->title}}</h3>
      <p>{{$item->status}}</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  @endforeach
</div>


  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Yuk, hubungi saya dan kita bisa bicarakan tentang pondok pesantren. Terima kasih!</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->
<div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
  <div class="p-5 h-100 rounded contact-map">
      <iframe class="rounded w-100 h-100 contact-map" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.071175658074!2d113.45889727410973!3d-7.1177505697974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9d5d7b4f5370f%3A0x79420e26cb1142e2!2sPondok%20Pesantren%20Sumber%20Anom%20Angsanah!5e0!3m2!1sid!2sid!4v1704818296610!5m2!1sid!2sid" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
</div>


<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>By : <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">GabutCrypto</a></p>
</footer>

</body>
</html>
