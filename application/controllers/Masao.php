<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masao extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		$data = $this->MasaoModel->getData('resep');
		$this->load->view('resep', array('data' => $data));
	}


    public function input() {
    	if($this->input->post('go_upload')) {
            
            $judul = $_POST['judul'];
            $bahan = $_POST['bahan'];
            $langkah = $_POST['langkah'];
            $sumber = $_POST['sumber'];
            $img_url = $_POST['img_url'];

            $data_insert = array(
                'judul' => $judul,
                'bahan' => $bahan,
                'langkah' => $langkah,
                'sumber' => $sumber,
                'img_url' => $img_url
                );

            $this->MasaoModel->insertData('resep', $data_insert);
            redirect(site_url());
            
        }
    } 

    // update data

    public function update($id){
        $resep = $this->MasaoModel->GetDataId('resep', "where id = '$id'");
        $data = array(
                "id" => $resep[0]['id'],
                "judul" => $resep[0]['judul'],
                "bahan" => $resep[0]['bahan'],
                "langkah" => $resep[0]['langkah'],
                "sumber" => $resep[0]['sumber'],
                "img_url" => $resep[0]['img_url']
            );
        $this->load->view('resep_update', $data);        
    }

    public function do_update(){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $bahan = $_POST['bahan'];
        $langkah = $_POST['langkah'];
        $sumber = $_POST['sumber'];
        $img_url = $_POST['img_url'];
        $data_update = array(
            'judul' => $judul,
            'bahan' => $bahan,
            'langkah' => $langkah,
            'sumber' => $sumber,
            'img_url' => $img_url
            );
        $where = array('id' => $id);
        $res = $this->MasaoModel->updateData('resep', $data_update, $where);
        redirect(site_url());
    }   

    // delete data
    public function do_delete($id) {
        $where = array('id' => $id);
        $this->MasaoModel->deleteData('resep', $where);
        redirect(site_url());
    }

}
