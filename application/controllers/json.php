<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller 
{
    
    
    public function addUser(){
      $data = json_decode(file_get_contents('php://input'), true);
      $uid= $data['userId'];
      $refid= $data['refId'];
      $name = $data['name'];
      $contact = $data['contact'];
      $contact = $this->input->post('contact');
      $status = 1;
      $data["message"]=$this->listing_model->addUser($uid,$refid,$name,$contact,$status);
      $this->load->view("json",$data);  
  }


  

public function getAllCategory(){
      $data["message"]=$this->category_model->getAllCategory();
    $this->load->view("json",$data);  
}

public function getHomeData(){
    $data["message"]=$this->category_model->getHomeData();
    $this->load->view("json",$data);  
}



public function getAllCategoryById(){
    $id=$this->input->get_post("id");
    $data["message"]=$this->subcategory_model->getAllCategoryById($id);
    $this->load->view("json",$data);  
}

public function registerUser(){
    $data["message"]=$this->user_model->registerUserFronEnd('vinod', 'beloshe','asmitajadhav2593@gmail.com');
    $this->load->view("json",$data);  
}


public function enquiry(){
    // $data = json_decode(file_get_contents('php://input'), true);
    $bid = $this->input->post('bid');
    $email = $this->input->post('email');
    $name = $this->input->post('name');
    $message = $this->input->post('message');
    $contact = $this->input->post('contact');
     $data["message"]=$this->listing_model->enquiry($bid,$email,$name,$message,$contact);
    $this->load->view("json",$data);  
}



public function uploadImage(){
    $userId = $this->input->get_post("bid");
    // $userId = $this->session->userdata("id");
    echo $userId;
    $file_path = "./images/" . $userId . '/';

    // print_r($_FILES;
    if (isset($_FILES['multipleUpload'])) {

        if (!is_dir('images/' . $userId)) {
            mkdir('./images/' . $userId, 0777, TRUE);
        }

        $files = $_FILES;
        $cpt = count($_FILES ['multipleUpload'] ['name']);

        for ($i = 0; $i < $cpt; $i ++) {

            $name = time().$files ['multipleUpload'] ['name'] [$i];
            $_FILES ['multipleUpload'] ['name'] = $name;
            $_FILES ['multipleUpload'] ['type'] = $files ['multipleUpload'] ['type'] [$i];
            $_FILES ['multipleUpload'] ['tmp_name'] = $files ['multipleUpload'] ['tmp_name'] [$i];
            $_FILES ['multipleUpload'] ['error'] = $files ['multipleUpload'] ['error'] [$i];
            $_FILES ['multipleUpload'] ['size'] = $files ['multipleUpload'] ['size'] [$i];

            $this->upload->initialize($this->set_upload_options($file_path));
            if(!($this->upload->do_upload('multipleUpload')) || $files ['multipleUpload'] ['error'] [$i] !=0)
            {
                print_r($this->upload->display_errors());
            }
            else
            {
                // $this->load->model('uploadModel','um');
                // $this->um->insertRecord($user,$name);
                return $userId;
            }
        }
    } 
}





} ?>