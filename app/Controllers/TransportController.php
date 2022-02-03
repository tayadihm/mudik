<?php

namespace App\Controllers;
use App\Models\Transportasi;

use App\Controllers\BaseController;

class TransportController extends BaseController
{
    protected $transport;

    function __construct()
    {
        $this->transport = new Transportasi();
    }

    public function index()
    {
        $data['transport'] = $this->transport->findAll();

        return view('transportasi/index', $data);
    }

    public function create()
    {
        $this->transport->insert([
            'jenis_transportasi' => $this->request->getPost('jenis_transportasi'),
            'rute_awal' => $this->request->getPost('rute_awal'),
            'rute_akhir' => $this->request->getPost('rute_akhir'),
            'jadwal' => $this->request->getPost('jadwal'),
            'slot' => $this->request->getPost('slot'),
        ]);

        return redirect()->to('transportasi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $this->transport->update($id, [
            'jenis_transportasi' => $this->request->getPost('jenis_transportasi'),
            'rute_awal' => $this->request->getPost('rute_awal'),
            'rute_akhir' => $this->request->getPost('rute_akhir'),
            'jadwal' => $this->request->getPost('jadwal'),
            'slot' => $this->request->getPost('slot'),
        ]);

        return redirect()->to('transportasi')->with('success', 'Data Berhasil Diperbaharui');
    }

    public function delete($id)
    {
        $this->transport->delete($id);

        return redirect()->to('transportasi')->with('success', 'Data Berhasil Dihapus');
    }
}
