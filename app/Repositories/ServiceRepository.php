<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        return $this->service->getAll();
    }

    public function save($data)
    {
        $service = new $this->service;

        $service->service_designation = $data['service_designation'];
        $service->service_description = $data['service_description'];
        $service->statut_id = $data['statut_id'];
        $service->service_date_creation = $data['service_date_creation'];
        $service->service_date_creation_par = $data['service_date_creation_par'];

        $service->save();

        return $service->fresh();
    }

    public function getById($id)
    {
        return $this->service->findOrFail($id);
    }

    public function update($data, $id)
    {
        $service = $this->service->find($id);

        $service->service_designation = $data['service_designation'];
        $service->service_description = $data['service_description'];
        $service->statut_id = $data['statut_id'];
        $service->service_derniere_modif = $data['service_derniere_modif'];
        $service->service_date_derniere_modif_par = $data['service_date_derniere_modif_par'];

        $service->update();

        return $service;

    }

    public function delete($id)
    {
        $service = $this->service->find($id);
        $service->delete();

        return $service;
    }
}