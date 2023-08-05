<x-layout>
  @foreach ($links as $v)
    <dl>
      <dt><a href="{{ $v['url'] }}" target="_blank">{{ $v['title'] }}</a></dt>
      <dd>{{ $v['description'] }}</dd>
    </dl>
  @endforeach
</x-layout>
