<?php

class cidadeEstado extends model {

    public function getUF() {
        $array = array();

        $sql = "SELECT uf FROM cidade_estado GROUP BY uf ORDER BY uf";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}