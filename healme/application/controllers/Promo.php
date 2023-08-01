<?php

class Promo extends CI_Controller
{

    protected $sesi;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpromo', 'm');

        $config['upload_path'] = 'files/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 20000;
        $config['file_name'] = uniqid();
        $this->load->library('upload', $config);

        $this->sesi = $this->session->userdata('login_admin');
    }


    public function index()
    {
        $v['data'] = $this->m->get()->result();
        view('promo.index', $v);
    }

    public function store()
    {
        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        } else {
            $data['image'] = 'no-image.jpg';
        }

        $this->m->add($data);
        redirect(base_url() . 'promo');
    }

    public function delete($id)
    {
        $data = $this->m->get(['id' => $id])->row();
        if ($data->image != '' && file_exists('files/' . $data->image)) {
            unlink('files/' . $data->image);
        }
        $this->m->delete(['id' => $id]);
        redirect(base_url() . 'promo');
    }
}
