<!DOCTYPE html>
<html lang="EN">

    @include('templates.head')

<body>
    @include('templates.nav')
    <div class="container py-4">
        @yield('dash')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

   @include('templates.footer')
</body>

</html>
