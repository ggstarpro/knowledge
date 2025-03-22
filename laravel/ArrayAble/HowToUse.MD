# 1:classを作成
```
<?php

declare(strict_types=1);

namespace App\Http\Dto\Sample;

use App\Http\Dto\ArrayAble;

/**
 * Class Sample
 */
class SampleDto
{
    use ArrayAble;

    public function __construct(
        private int $sample_id
        private string $sample_amount,
    ) {
    }

    /**
     * @return string
     */
    public function getSampleId(): int
    {
        return $this->sample_id;
    }

    /**
     * @param  string  $sample_amount
     */
    public function getSampleAmount(): int
    {
        return $this->sample_amount;
    }
}
```

# 2:controllerで使用
```
use App\Http\Requests\TestRequest;

class TestController extends Controller
{
    public function store(TestRequest $request): \Illuminate\Http\Response
    {
        $validated = $request->validated();

        $todoValue = app()->makeWith(TodoValue::class, $params);
    }
}
```