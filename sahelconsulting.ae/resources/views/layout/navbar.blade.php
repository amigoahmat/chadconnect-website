<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo-cogimex.png" alt="">
        <h1>Sahel Consulting<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('acceuil.index')}}"  class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a  href="{{route('apropos.index')}} "  class="{{ request()->is('apropos*') ? 'active' : '' }}">A Propos</a></li>
          <li><a href="{{route('services.index')}} "  class="{{ request()->is('services*') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{route('projets.index')}} "  class="{{ request()->is('projets*') ? 'active' : '' }}">Projects</a></li>
          <li><a href="{{route('actualites.index')}} "  class="{{ request()->is('actualites*') ? 'active' : '' }}">Actualités</a></li>

          <li><a href="{{route('contact.index')}} "  class="{{ request()->is('contacts*') ? 'contacts' : '' }}"> Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <!-- Language Selector -->
      <div class="language-selector">
        <select class="form-select">
          <option value="en" {{session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
          <option value="ar" {{session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabe</option>
          <!-- Add more language options as needed -->
        </select>
      </div>

    </div>
  </header><!-- End Header -->

