<?php 

namespace App\Services;

use Validator;
use Exception;
use InvalidArgumentException;
use App\Repositories\ServiceRepository;
use Illuminate\Support\Facades\{ DB, Log };

class ServiceService
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function getAll()
    {
        return $this->serviceRepository->getAll();
    }

    public function save($data)
    {
        $validator = Validator::make($data, [
            'service_designation' => 'required',
            'service_description' => 'required',
            'statut_id' => 'required',
            'service_date_creation' => 'required',
            'service_date_creation_par' => 'required',
        ]);

        if($validator->fails())
        {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->serviceRepository->save($data);

        return $result;
    }

    public function getById($id)
    {
        return $this->serviceRepository->getById($id);
    }

    public function update($data, $id)
    {
        $validator = Validator::make($data, [
            'service_designation' => 'required',
            'service_description' => 'required',
            'statut_id' => 'required',
            'service_date_creation' => 'required',
            'service_date_creation_par' => 'required',
        ]);

        if($validator->fails())
        {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

            try{
                $service = $this->serviceRepository->update($data, $id);

            } catch (Exception $e) {
                DB::rollback();
                Log::alert($e->getMessage());
                throw new InvalidArgumentException('unable to update data');
            }

        DB::commit();
        
        return $service;
    }

    public function delete($id)
    {
        DB::beginTransaction();

            try{
                $service = $this->serviceRepository->delete($id);

            } catch (Exception $e) {
                DB::rollback();
                Log::alert($e->getMessage());
                throw new InvalidArgumentException('unable to delete data');
            }

        DB::commit();

        return $service;
    }
}