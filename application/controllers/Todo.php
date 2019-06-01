<?php

class Todo extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('todo_model');
    $this->load->helper('url');
  }

  public function index()
  {
    $data['todos'] = $this->todo_model->get_todo();
    $this->load->view('index', $data);
  }

  public function detail($todo_id = NULL)
  {
    $this->load->helper('form');
    $data['todo'] = $this->todo_model->get_todo($todo_id);
    if (empty($data['todo']))
    {
      show_404();
    }
    echo $data['todo']['todo_title'];
    $this->load->view('detail', $data);
  }

  public function createform()
  {
    $this->load->library('form_validation');
    $this->load->view('createform');
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('content', 'Content', 'required');
    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('createform');
    }
    else
    {
      $this->todo_model->set_todo();
      redirect('/', 'location', 302);
    }
  }

  public function delete($todo_id = 0)
  {
    $this->todo_model->delete_todo($todo_id);
    redirect('/', 'location', 302);
  }

  public function updateform($todo_id = 0)
  {
    if ($todo_id === 0)
    {
      show_404();
    }
    $data['todo'] = $this->todo_model->get_todo($todo_id);
    if (empty($data['todo']))
    {
      show_404();
    }
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->view('updateform', $data);
  }

  public function update($todo_id = 0)
  {
    $this->todo_model->update_todo($todo_id);
    redirect('/', 'location', 302);
  }
}