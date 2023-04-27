<?php

//That's file using my cms system opencart, you can write it to file (not recommend), or connect to your DB driver

//Check if request not empty and have data
if(isset($this->request->post['jsE_message'])
    && isset($this->request->post['jsE_file']) && isset($this->request->post['jsE_line'])
    && isset($this->request->post['jsE_col']) && isset($this->request->post['jsError'])
    && isset($this->request->post['jsE_page'])
){

  //Write data to database. It's important to use escape function!
  $this->db->query("
    INSERT INTO jsError (jse_error, jse_file, jse_message, jse_line, jse_col, jse_page,jse_ip,jse_useragent) VALUES (
        '".$this->db->escape($this->request->post['jsError'])."', // Error description
        '".$this->db->escape($this->request->post['jsE_file'])."', // Error file
        '".$this->db->escape($this->request->post['jsE_message'])."', // Error message
        '".$this->db->escape($this->request->post['jsE_line'])."', // Error line
        '".$this->db->escape($this->request->post['jsE_col'])."', // Error colimn
        '".$this->db->escape($this->request->post['jsE_page'])."', // Error page
        '".$this->document->getIp()."', // User ip
        '".$_SERVER['HTTP_USER_AGENT']."'); // User agent (you can check user browser, width, height).
    ");
  return 1;
}

return 0;
