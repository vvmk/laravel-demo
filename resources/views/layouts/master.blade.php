<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog - couchjes.us</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
/* Move down content because we have a fixed navbar that is 3.5rem tall */
body {
  padding-top: 3.5rem;
}
    </style>

  </head>
  <body>

    @include ('layouts.nav')
    @include ('layouts.banner')

    <main role="main">
      <div class="container">
        <div class="row">
          <div class="p-2 col-10">
            @yield ('content')
          </div>
          <div class="col-2">
            @include ('layouts.sidebar')
          </div>
        </div>
      </div>
    </main>

    @include ('layouts.footer')

  </body>
</html>
