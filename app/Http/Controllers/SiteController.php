<?php

namespace App\Http\Controllers;

use App\Http\Requests\BacklinkRequest;
use App\Models\Backlink;
use App\Services\BacklinkService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\View\View;

/**
 * Class SiteController
 * @package App\Http\Controllers
 * @author Vladyslav Hychka <vlad.hychka@gmail.com>
 */
class SiteController extends Controller
{
    /**
     * @var BacklinkService
     */
    protected BacklinkService $backlinkService;

    /**
     * @param BacklinkService $backlinkService
     */
    public function __construct(BacklinkService $backlinkService)
    {
        $this->backlinkService = $backlinkService;
    }

    /**
     * @return View
     */

    public function index(): View
    {
        return view(
            'welcome',
            [
                'results' => $this->backlinkService->getResult(),
            ]
        );
    }

    /**
     * @throws Exception
     */
    public function sendRequestToAPI(BacklinkRequest $request)
    {
        if ($request->target == null) {
            throw new Exception('No data', 405);
        }

        $result = $this->backlinkService->getResponseFromAPI($request->target);

        if (!empty($result)) {
            $this->backlinkService->saveToDb($result);
        }
    }
}
