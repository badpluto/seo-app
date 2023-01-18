<?php

namespace App\Http\Controllers;

use App\Http\Requests\BacklinkRequest;
use App\Models\Backlink;
use App\Services\BacklinkService;
use Illuminate\Http\Request;
use Exception;

class SiteController extends Controller
{
    protected BacklinkService $backlinkService;

    public function __construct(BacklinkService $backlinkService)
    {
        $this->backlinkService = $backlinkService;
    }

    public function index(BacklinkRequest $request)
    {
        return view('welcome', [
            'content' => $this->backlinkService-getResult(),
        ]);
    }

    /**
     * @throws Exception
     */
    public function send(BacklinkRequest $request)
    {
        if ($request->target == null) {
            throw new Exception('Not data', 405);
        }

        $result = $this->backlinkService->getResponseFromAPI($request->target);

        if(!empty($result)){
            $this->backlinkService->saveToDb($result);
        }
    }
}
