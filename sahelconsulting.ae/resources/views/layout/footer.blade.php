  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>COGIMEX S.A</h3>
              <p>
                BP : 5880<br>
                N'Djamena | Sabanguali<br><br>
                <strong>Téléphone:</strong> 66 19 14 14 / 60 00 01 16<br>
                <strong>Email:</strong> contact@cogimex-td.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
                <li><a href="{{route('acceuil.index')}}"  class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a  href="{{route('apropos.index')}} "  class="{{ request()->is('apropos*') ? 'active' : '' }}">A Propos</a></li>
                <li><a href="{{route('services.index')}} "  class="{{ request()->is('services*') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{route('projets.index')}} "  class="{{ request()->is('projets*') ? 'active' : '' }}">Projects</a></li>
                <li><a href="{{route('actualites.index')}} "  class="{{ request()->is('actualites*') ? 'active' : '' }}">Actualités</a></li>

                <li><a href="{{route('contact.index')}} "  class="{{ request()->is('contacts*') ? 'contacts' : '' }}"> Contact</a></li>

            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy;2024 Copyright <strong><span>COGOMEX SA</span></strong>. Tous droits reservés
        </div>

      </div>
    </div>

  </footer>
  <!-- End Footer -->
