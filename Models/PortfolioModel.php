<?php


class PortfolioModel extends Model {

    public function getPictures($limit){
    $result = array();
    if($limit > 0)        
        $result = $this->db->query("SELECT * FROM portfolio LIMIT {$limit}");
    else        
        $result = $this->db->query("SELECT * FROM portfolio");

        if($result->rowCount() > 0){
            $result = $result->fetchAll();
        }
        return $result;
    }
}