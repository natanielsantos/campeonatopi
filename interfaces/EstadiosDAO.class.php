<?php

interface EstadiosDAO {

    public function load($idestadios, $timesIdTimes, $partidaIdpartida);

    public function queryAll();

    public function queryAllOrderBy($orderColumn);

    public function delete($idestadios, $timesIdTimes, $partidaIdpartida);

    public function insert($estadio);

    public function update($estadio);

    public function clean();

    public function queryByNome($value);

    public function queryByApelido($value);

    public function queryByCidade($value);

    public function queryByEstado($value);

    public function queryByCapacidade($value);

    public function deleteByNome($value);

    public function deleteByApelido($value);

    public function deleteByCidade($value);

    public function deleteByEstado($value);

    public function deleteByCapacidade($value);
}

?>