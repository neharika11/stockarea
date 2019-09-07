<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*********************/
class Adminlogin extends CI_Controller
{
    
private function hashedPassword($plainPassword){
    return password_hash($plainPassword, PASSWORD_DEFAULT);
}
public function index(){
    if(!empty($this->session->userdata('fadminemail')) && !empty($this->session->userdata('fadminname')) && !empty($this->session->userdata('fadminid'))) {
          redirect('admin/');
      }
    $this->load->view('admin/adminlogin');
}

    public function admin_login_validation(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('admin_email', 'Email', 'required|trim|valid_email');  
            $this->form_validation->set_rules('admin_password', 'Password', 'required|trim'); 
            if($this->form_validation->run()){
            $adminemail = $this->input->post('admin_email');
            $password = $this->input->post('admin_password');
            $this->load->model('Adminmodel');
            $dataadmin = $this->Adminmodel->admin_login_validation($adminemail,$password);
            
            if(!empty($dataadmin)){
                if($dataadmin->status==='1'){
                $session_admin_data = array(
                'adminemail' => $dataadmin->admin_email,
                'adminname' => $dataadmin->admin_name,
                'adminid' =>$dataadmin->id );
               $this->session->set_userdata($session_admin_data);
               redirect(base_url('admin/'));
            }
            else if($dataadmin->status==='2'){
              $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Your account is blocked </div>');  
              redirect(base_url('adminlogin'));
            }
          }
        else {  
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"> Invalid Username or Password </div>');  
          redirect(base_url('adminlogin')); 
        }
        }
        else  {  
          $this->session->set_flashdata('error', validation_errors());  
          redirect(base_url('adminlogin'));  
        }
     }
 }
?>
