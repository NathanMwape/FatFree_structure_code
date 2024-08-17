<?php 
     class ClientController extends BaseController{

         public function displaysRapportClient()
         {
            $client = new Client($this->db);
            $this->f3->set("clients", $client->all());
            echo Template::instance()->render("index.html");
         }
     }
?>