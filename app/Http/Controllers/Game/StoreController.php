<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Post\BaseController;

use App\Http\Requests\Game\StoreRequest;
use App\Models\Game;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request,Game $game)
    {
        $data = $request ->validated();
        $this->service->store($data);
        return redirect()->route('games.index');

    }

}
