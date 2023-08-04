<x-layout>
  <h1 class="h1">日付加減算</h1>
  <form method="POST" action="{{ route('tool_date_add-subtract_execute') }}">
    @csrf
    <div>
      <label class="form-label">日付</label>
      <input class="form-control" name="base_date" placeholder="YYYYMMDD" value="{{ $form['base_date'] }}" />
    </div>
    <div class="mt-3">
      <div class="form-label">加算 / 減算</div>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="operator" value="p" {{ $form['operator'] === 'p' ? 'checked' : '' }} />
        <label class="form-check-label">+</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="operator" value="m" {{ $form['operator'] === 'm' ? 'checked' : '' }} />
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
    <div class="input-group mt-3">
      <span class="input-group-text bg-primary-subtle" style="width: 100px">結果</span>
      <input class="form-control" value="{{ $result }}" />
    </div>
  </form>
</x-layout>
