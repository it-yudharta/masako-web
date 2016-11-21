<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masao_tips extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    public function index() {
        $data = $this->MasaoModel->getData('tips');
        $this->load->view('tips', array('data' => $data));
    }

    public function input() {
        
         if($this->input->post('go_upload')) {
            
            $judul = $_POST['judul'];
            $konten = $_POST['konten'];
            $sumber = $_POST['sumber'];
            $img_url = $_POST['img_url'];

            $data_insert = array(
                'judul' => $judul,
                'konten' => $konten,
                'sumber' => $sumber,
                'img_url' => $img_url
                );

            $this->MasaoModel->insertData('tips', $data_insert);
            redirect('/Masao_tips');
            
        }
    }

    public function update($id){
        $resep = $this->MasaoModel->GetDataId('tips', "where id = '$id'");
        $data = array(
                "id" => $resep[0]['id'],
                "judul" => $resep[0]['judul'],
                "konten" => $resep[0]['konten'],
                "sumber" => $resep[0]['sumber'],
                "img_url" => $resep[0]['img_url']
            );
        $this->load->view('tips_update', $data);        
    }

    public function do_update(){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];
        $sumber = $_POST['sumber'];
        $img_url = $_POST['img_url'];
        $data_update = array(
            'judul' => $judul,
            'konten' => $konten,
            'sumber' => $sumber,
            'img_url' => $img_url
            );
        $where = array('id' => $id);
        $res = $this->MasaoModel->updateData('tips', $data_update, $where);
        redirect('/Masao_tips');
    }   

    // delete data
    public function do_delete($id) {
        $where = array('id' => $id);
        $this->MasaoModel->deleteData('tips', $where);
        redirect('/Masao_tips');
    }

}
