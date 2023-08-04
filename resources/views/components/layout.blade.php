<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>sidearrow.net</title>
  @vite(['resources/css/common.scss'])
</head>

<body>
  <header>
    <nav class="navbar border-bottom">
      <div class="container">
        <a class="navbar-brand" href="/">sidearrow.net</a>
      </div>
    </nav>
  </header>
  <main>
    <div class="container py-4">{{ $slot }}</div>
  </main>
  <footer class="bg-light py-4">
    <div class="text-center">
      <small>&copy; sidearrow.net</small>
    </div>
  </footer>
</body>

</html>
