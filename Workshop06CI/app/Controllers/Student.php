<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\CarrerModel;

class Student extends BaseController
{
    public function index()
{
    $model = new StudentModel();
    $data['students'] = $model->getStudentsWithCareer();
    return view('students/index', $data);
}


    public function create(){
    $carrerModel = new CarrerModel();
    $data['carreras'] = $carrerModel->getAll();

    return view('students/create', $data);
    }


    public function store()
    {
        $model = new StudentModel();

        $model->save([
            'first_name'  => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'idCarrer' => $this->request->getPost('idCarrer'),
        ]);

        return redirect()->to(base_url('students'));
    }

    public function edit($id)
    {
    $model = new StudentModel();
    $careerModel = new CarrerModel();

    $data['student'] = $model->find($id);  // Datos del estudiante
    $data['carreras'] = $careerModel->findAll(); // Carreras para el select

    return view('students/edit', $data);
    }


    public function update($id)
    {
    $model = new StudentModel();

    $model->update($id, [
        'first_name' => $this->request->getPost('first_name'),
        'last_name'  => $this->request->getPost('last_name'),
        'email'      => $this->request->getPost('email'),
        'idCarrer'  => $this->request->getPost('idCarrer'),
    ]);

    return redirect()->to(base_url('students'));
}


    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to(base_url('students'));
    
    }
}
