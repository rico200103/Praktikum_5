<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Device extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Device'
        ];


        return view('device/index', $data);
    }
    public function detail()
    {
        $data = [
            'title' => 'Detail Device',
            'device' => $this->deviceModel->getDevice()
        ];
        return view('device/detail', $data);
    }
}
