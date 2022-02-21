<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServiceService;

class ServiceController extends Controller
{
    private $serviceService;

    public function __contruct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        return view('pages.services');
    }

    public function getAll()
    {
       
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
       
    }

    public function update(Request $request, $id)
    {

    }

    public function destory($id)
    {
       
    }
}
