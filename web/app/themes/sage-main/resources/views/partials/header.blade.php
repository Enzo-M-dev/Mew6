<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="{!! App::getHeaderLogo() !!}" alt="">
    </a>
    {{-- {{ $header_image }} --}}
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    <nav class="nav-primary">
     <a>Home</a>
     <a>Pricing</a>
     <a>Contact</a>
     <select></select>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
