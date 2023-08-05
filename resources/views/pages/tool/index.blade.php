<x-layout>
  <h1 class="h1">TOOL</h1>
  <ul>
    @foreach ($links as $v)
      <li><a href="{{ $v['url'] }}">{{ $v['title'] }}</a></li>
    @endforeach
  </ul>
</x-layout>
