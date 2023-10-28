<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\SeoResource;
use App\Models\SEO;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $page)
    {
        return new SeoResource(SEO::where(['page' => $page])->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
