<?php
class Contact_model extends CI_Model {
  public function get_contacts() {
    // $config['hostname'] = "localhost";
    // $config['username'] = "root";
    // $config['password'] = "";
    // $config['database'] = "thebarn_db";
    // $connection = $this->load->database($config);

    $query = $this->db->get('contacts');
    // $query = $this->db->where('id', 2);
    // $query = $this->db->where(['id' => 2]);
    // return $query->result();

    // $query = $this->db->query("SELECT * FROM contacts");
    return $query->result_array();

  }
  public function insert_contact ($name, $message) {
    $data = array(
      'name' => $name,
		  'message' => $message,
    );
    return $this->db->insert('contacts', $data);
  }

  public function check_name($name) {
    $this->db->where(['name' => $name]);
    $query = $this->db->get('contacts');
    return $query->result();
  }
}

?>