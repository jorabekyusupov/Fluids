<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected object $service;
    protected object $storeRequest;
    protected object $updateRequest;

    public function index()
    {
        return $this->service->get()->get();
    }

    public function store()
    {
        $data = $this->storeRequest->validated();
        return $this->service->store($data);
    }

    public function update($id)
    {
        $data = $this->updateRequest->validated();
        return $this->service->update($id, $data);
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
