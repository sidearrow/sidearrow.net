<x-layout>
  <h1 class="h1">日付加減算</h1>
  <section class="mx-auto mw-480">
    <form method="POST" action="{{ route('tool_date_add-subtract_execute') }}">
      @csrf
      <div class="alert alert-light">
        <div>
          <label class="form-label">日付</label>
          <input class="form-control" name="base_date" placeholder="YYYYMMDD" value="{{ $form['base_date'] }}" />
          <div class="form-text">日付は YYYYMMDD 形式で指定してください。</div>
        </div>
        <div class="mt-3">
          <div class="form-label">加算 / 減算</div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="operator" value="p"
              {{ $form['operator'] === 'p' ? 'checked' : '' }} />
            <label class="form-check-label">+</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="operator" value="m"
              {{ $form['operator'] === 'm' ? 'checked' : '' }} />
            <label class="form-check-label">-</label>
          </div>
        </div>
        <div class="mt-3">
          <label class="form-label">日数</label>
          <input class="form-control" type="number" name="day_num" value="{{ $form['day_num'] }}" />
        </div>
        <div class="mt-3 text-center">
          <button class="btn btn-outline-dark px-5" type="submit">計算</button>
        </div>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger mt-2">
          <ul class="mb-0">
            @foreach ($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="alert alert-success">
        <p>{{ $message }}</p>
        <div class="input-group">
          <span class="input-group-text" style="width: 100px">結果</span>
          <input class="form-control" value="{{ $result }}" />
        </div>
      </div>
    </form>
  </section>
</x-layout>
