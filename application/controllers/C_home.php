<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    public function index()
    {
        $this->load->view('v_home');   
    }

    public function aksi()
    {
        $image = [
            'path'      => './assets/upload/',
            'encrypt'   => true,
            'file'      => 'gambar', 
            'type'      => 'img'
        ];
        $image = $this->req->upload($image);
        // var_dump($image);
        if (isset($image['data']['file_name'])) {
            $this->detect($image['data']['file_name']);
        }elseif(!isset($_FILES['gambar'])){
            echo json_encode(['status' => false, 'message' => 'Gambar tidak boleh kosong']);
        }else{
            echo json_encode(['status' => false, 'message' => 'Gagal upload gambar']);
        }

        // var_dump($image);

    }

    public function detect($image = NULL)
    {
        $command = escapeshellcmd('python3 c:\\xampp\\htdocs\\batik\\python\\predictImage.py ' . $image);
        $output = shell_exec($command);
        echo $output;

        unlink('./assets/upload/' . $image);

        // echo json_encode($output);

        // return $data = json_decode($hasil);
    }

}

/* End of file C_home.php */
