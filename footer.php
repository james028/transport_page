<?php

?>

	<footer class="page-footer">
          <div class="container container-ft">
            <div class="row">
             	<div class="col s12 m3 ">
             		<p class="footer-title">KONTAKT:</p>
                    <div class="footer-address-one">
                        Siedziba firmy: <br>
                        ul. Kraczewicka 29/56<br>
                        24-320 Poniatowa<br><br>
                    </div>
                    <div class="footer-address-one footer-address">
                            Biuro firmy: <br>
                            ul. Rynek 24/24<br>
                            23-235 Annopol
                    </div>
             	</div>
             	<div class="col s12 m4" style="margin-top: 80px;">
                    Piotr Korecki <br>
             		<p></i>
                        E-mail: koreckibus@wp.pl</p>
                    <p></i>
                        Telefon: 509-232-160</p>
             	</div>
             	<div class="col s12 m3" style="margin-top: 20px;">
             		<p>Znajdź nas na facebooku:</p>
                        <a target="_blank;" href="https://www.facebook.com/Korecki-Przewozy-autokarowe-127616891302316/"><i class="fab fa-facebook"></i>
                        </a>
             	</div>
             	<div class="col s12 m2 ft-links" style="margin-top: 20px;">
             		<ul>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">Strona głowna</a></li>
                        <li><a href="<?php echo site_url('/events/'); ?>">Wydarzenia</a></li>
                        <li><a href="<?php echo site_url('/gallery/'); ?>">Zdjęcia</a></li>
                        <li><a href="<?php echo site_url('/contact/'); ?>">Kontakt</a></li>
                    </ul>
             	</div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            	<p class="left">Designed and created by Jakub Kania kubak.15@gmail.com</p>
            	<p class="right">All Right Reserved ©2018</p>
            </div>
          </div>
</footer>

<script>
	//hamburger menu

// Select DOM Items
const menuBtn = document.getElementById('menu-hamb');
const menu = document.getElementById('nav-block');

// Set Initial State Of Menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    menu.classList.add('show');

    // Set Menu State
    showMenu = true;
  } else {
    menu.classList.remove('show');

    // Set Menu State
    showMenu = false;
  }
}

//preloader
document.body.onload = function(){ 
    const preloader = document.getElementById('page-preloader');
      preloader.classList.add('done');
}

function initMap() {
  var location = {lat: 51.191750, lng: 22.062870};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: location});
        var marker = new google.maps.Marker({position: location, map: map});
      }

  //scroll top
  let btn = document.getElementById("btn-top");

window.addEventListener('scroll', () => {
    if (scrollY > 600 ) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
});

btn.addEventListener('click', () => {
    let count = 0;

    let x = setInterval(() => {
        window.scrollTo(0, screenY - count);

        count++;

        if (scrollY == 0 ) {
            clearInterval(x);
        }
    }, 200);
});
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkFjA6qx1bd2V1htVRJxWt066UXzsDffs&callback=initMap">
</script>
</body>
</html>
