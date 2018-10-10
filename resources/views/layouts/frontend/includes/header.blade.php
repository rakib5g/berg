 <!--Starts top Navbar-->
  <section class="nav-top">

  </section>
  <!--End of top Navbar-->
<!--Starts Bottom Navbar-->
  <section class="nav-bottom">
    <div class="container-bottom">
      <div class="row">
        <div class="col-xl-1 col-1">
          <div class="logo-bottom">
            <a href=""><img src="{{ asset('asset/frontend/img/logo.png') }}" alt=""></a>
          </div>
        </div>
        <div class="col-xl-7 col-11">
          <nav class="site-nav-bottom">
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('financialAcademy') }}">Financial Academy</a></li>
              <li><a href="{{ route('financialPlanning') }}">Financial planning</a></li>
              <li><a href="{{ route('investment') }}">Investment</a></li>
              <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
          </nav>

        </div>

        <div class="col-xl-4 col-12">
          <div class="logo">
            <ul class="social-icon inline-block">
               @foreach($socials as $key => $social)
                    <li><a href="{{ $social->facebook }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $social->twitter }}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $social->youtube }}" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://accounts.google.com" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $social->linkedin }}" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fas fa-mobile-alt" aria-hidden="true"></i></a></li>
                @endforeach
            </ul>
            <div class="country dropdown inline-block">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <select name="one" class="dropdown-select">
                  <option value="">English</option>
                  <option value="1">Polish</option>
              </select>
            </div>
          </div>
        </div>

      </div>
      <div class="menu-toggle-bottom">
        <div class="hamburger-bottom"></div>
      </div>

    </div>
  </section>
  <!--End of Bottom Navbar-->
