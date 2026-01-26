<?php

namespace Homelen\Http\Controllers;

use Homelen\Http\Requests\CreateProviderRequest;
use Homelen\Http\Requests\UpdateProviderRequest;
use Homelen\Models\Provider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ProviderController extends BaseController
{
    public function list(Request $request): JsonResponse
    {
        return response()->json(['status' => 200, 'data' => Provider::all()->toArray()]);
    }

    public function show(string $id): JsonResponse
    {
        return response()->json([
            'status' => 200,
            'data' => Provider::findOrFail($id)->toArray()
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json([
            'status' => 204,
            'data' => Provider::destroy($id)
        ]);
    }

    public function store(CreateProviderRequest $request): JsonResponse
    {
        if (!$request->validated()) {
            throw new \InvalidArgumentException('Invalid request');
        }

        $provider = Provider::create([
            'name' => $request->get('name'),
            'link' => $request->get('url'),
        ]);

        return response()->json([
            'status' => 204,
            'data' => $provider->toArray()
        ]);
    }

    public function update(UpdateProviderRequest $request, Provider $provider): JsonResponse
    {
        if (!$request->validated()) {
            throw new \InvalidArgumentException('Invalid request');
        }

        $provider->update([
            'name' => $request->get('name'),
            'link' => $request->get('url'),
        ]);

        return response()->json([
            'status' => 204,
            'data' => $provider->toArray()
        ]);
    }
}
