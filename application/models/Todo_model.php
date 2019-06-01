<?php

class Todo_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_todo($todo_id = 0)
  {
    if ($todo_id === 0)
    {
      $query = $this->db->get('todo');
      return $query->result_array();
    }
    $result = $this->db->get_where('todo', ['todo_id' => $todo_id])->row_array();
    if (empty($result))
    {
      show_404();
    }
    else
    {
      return $result;
    }
  }

  public function set_todo()
  {
    $this->load->helper('url');
    $data = [
      'todo_title' => $this->input->post('title'),
      'todo_content' => $this->input->post('content')
    ];
    return $this->db->insert('todo', $data);
  }

  public function delete_todo($todo_id = 0)
  {
    if (empty($this->db->get_where('todo', ['todo_id' => $todo_id])->row_array()))
    {
      show_404();
    }
    else
    {
      return $this->db->delete('todo', ['todo_id' => $todo_id]);
    }
  }

  public function update_todo($todo_id = 0)
  {
    if (empty($this->db->get_where('todo', ['todo_id' => $todo_id])->row_array()))
    {
      show_404();
    }
    else
    {
      $this->db->where('todo_id', $todo_id);
      return $this->db->update('todo', [
        'todo_title' => $this->input->post('title'),
        'todo_content' => $this->input->post('content')
      ]);
    }
  }
}