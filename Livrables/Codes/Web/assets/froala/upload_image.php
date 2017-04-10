<?php
$config['upload_path'] = base_url().'assets/froala/uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']	= '100';
$config['max_width']  = '2048';
$config['max_height']  = '1532';

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload())
{
    $error = array('error' => $this->upload->display_errors());

    $this->load->view('upload_form', $error);
}
else
{
    $data = array('upload_data' => $this->upload->data());

    $this->load->view('upload_success', $data);
}
?>