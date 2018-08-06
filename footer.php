<?php

?>

	<footer class="page-footer">
          <div class="container">
            <div class="row">
             	<div class="col s12 m3 l3">
             		<p class="footer-title">KONTAKT:</p>
                    <div class="footer-address-one">
                        Siedziba firmy: <br>
                        ul. Kraczewicka 29/56<br>
                        24-320 Poniatowa
                    </div>
                    <div class="footer-address-one footer-address">
                            Biuro firmy: <br>
                            ul. Rynek 24/24<br>
                            23-235 Annopol
                    </div>
             	</div>
             	<div class="col s12 m3">
             		<p><i class="fas fa-envelope"></i>
                        E-mail: koreckibus@wp.pl</p>
                    <p><i class="fas fa-mobile"></i>
                        Telefon: 509-232-160</p>
             	</div>
             	<div class="col s12 m3">
             		<p>Znajdź nas na facebooku:</p>
                        <a href="https://www.facebook.com/Korecki-Przewozy-autokarowe-127616891302316/"><i class="fab fa-facebook"></i>
                        </a>
             	</div>
             	<div class="col s12 m3">
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

<?php wp_footer(); ?>
</body>
</html>
