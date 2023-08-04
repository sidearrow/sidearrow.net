<?php

namespace App\Rules;

use Closure;
use DateTimeImmutable;
use Illuminate\Contracts\Validation\ValidationRule;

class StrictYmd implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dt = DateTimeImmutable::createFromFormat('Ymd', $value);
        if ($dt === false) {
            $fail('日付は YYYYMMDD 形式で指定してください');
        }
        if ($dt->format('Ymd') !== $value) {
            $fail('日付は YYYYMMDD 形式で指定してください');
        }
    }
}
