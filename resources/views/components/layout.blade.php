<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'sidearrow.net' }}</title>
  @vite(['resources/css/common.scss'])
  @if (config('env') === 'production')
    {{-- start gtag --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4H9K64SQ36"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-4H9K64SQ36');
    </script>
    {{-- end gtag --}}
  @endif
</head>

<body>
  <header>
    <nav class="navbar border-bottom">
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">sidearrow.net</a>
      </div>
    </nav>
  </header>
  <main>
    {{-- start breadcrumb  --}}
    @isset($breadcrumb)
      <div class="bg-light border-bottom">
        <div class="container py-2">
          <ol class="breadcrumb m-0">
            @foreach ($breadcrumb as $item)
              @if ($item['url'] === null)
                <li class="breadcrumb-item active">{{ $item['title'] }}</li>
              @else
                <li class="breadcrumb-item">
                  <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                </li>
              @endif
            @endforeach
          </ol>
        </div>
      </div>
    @endisset
    {{-- end breadcrumb  --}}
    <div class="container py-4">{{ $slot }}</div>
  </main>
  <footer class="bg-light py-4">
    <div class="text-center">
      <small>&copy; sidearrow.net</small>
    </div>
  </footer>
</body>

</html>
