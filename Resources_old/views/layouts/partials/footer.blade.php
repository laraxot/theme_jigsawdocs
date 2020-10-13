@include('pub_theme::layouts.partials.gear')
<!-- Footer-->
<footer class="position-relative z-index-10 d-print-none">
    <!-- Main block - menus, subscribe form-->
    <div class="py-6 bg-gray-200 text-muted">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="font-weight-bold text-uppercase text-dark mb-3">{{ Theme::metatag('sitename') }}</div>
            <p>{{ Theme::metatag('subtitle') }}</p>
            <ul class="list-inline">
              @foreach(config('social.items') as $soc)
                <li class="list-inline-item">
                  <a href="{{ $soc->url }}" target="_blank" title="twitter" class="text-muted text-hover-primary">
                  <i class="fab fa-{{ $soc->name }}"></i></a>
                </li>
              @endforeach
              {{--  
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                  <i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary">
                    <i class="fab fa-facebook"></i></a>
                  </li>
              <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>
                  --}}
            
            </ul>
          </div>
          {{-- 
             
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Città</h6>
            <ul class="list-unstyled">
              <li><a href="index.html" class="text-muted">Rooms     </a></li>
              <li><a href="category-rooms.html" class="text-muted">Map on top     </a></li>
              <li><a href="category-2-rooms.html" class="text-muted">Side map     </a></li>
              <li><a href="category-3-rooms.html" class="text-muted">No map     </a></li>
              <li><a href="detail-rooms.html" class="text-muted">Room detail     </a></li>
            </ul>
          </div>
          --}}
          @include('pub_theme::layouts.partials.footer.pages')
          

          {{-- 
          <div class="col-lg-4">
            <h6 class="text-uppercase text-dark mb-3">Daily Offers & Discounts</h6>
            <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
            <form action="#" id="newsletter-form">
              <div class="input-group mb-3">
                <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control bg-transparent border-dark border-right-0">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-dark border-left-0"> <i class="fa fa-paper-plane text-lg"></i></button>
                </div>
              </div>
            </form>
          </div>
          --}}
        </div>
      </div>
    </div>
    <!-- Copyright section of the footer-->
    <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left">
            <p class="text-sm mb-md-0">&copy; 2019 Your company.  All rights reserved.</p>
          </div>
          {{-- 
          <div class="col-md-6">
            <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
              <li class="list-inline-item">
                  <img src="{{ Theme::asset('pub_theme::img/visa.svg') }}" alt="..." class="w-2rem">
                </li>
              <li class="list-inline-item">
                  <img src="{{ Theme::asset('pub_theme::img/mastercard.svg') }}" alt="..." class="w-2rem">
                </li>
              <li class="list-inline-item">
                  <img src="{{ Theme::asset('pub_theme::img/paypal.svg') }}" alt="..." class="w-2rem">
                </li>
              <li class="list-inline-item">
                  <img src="{{ Theme::asset('pub_theme::img/western-union.svg') }}" alt="..." class="w-2rem">
                </li>
            </ul>
          </div>
          --}}
        </div>
      </div>
    </div>
  </footer>
  <!-- /Footer end-->
