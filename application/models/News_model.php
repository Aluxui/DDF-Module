<?php

  class News_model extends CI_Model{
   
    public function __construct(){
      $this->load->database();
    }
    
    public function get_news($slug = FALSE, $title = FALSE){
      
      if ($slug === FALSE){
        $query = $this->db->get('news');
        return $query->result_array();
      }
      
      if($title === FALSE){
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->result_array();
      }
      
      $query = $this->db->get_where('news', array('slug' => $slug, 'title' => $title));
      return $query->row_array();
    }
    
  }

?>