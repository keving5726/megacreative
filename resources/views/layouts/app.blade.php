<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
  <body>
    @include('includes.header')
    <div class="container">
      @yield('content')
    </div>
    @include('includes.footer')
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
