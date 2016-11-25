<?php

interface TimesDAO {

    public function load($id);

    public function queryAll();

    //.*
    public function queryAllOrderBy($orderColumn);

    //.*
    public function delete($idTimes);

    //.*
    public function insert($time);

    //.*
    public function update($time);

    //.*
    public function clean();

    public function queryByNome($value);

    public function queryBySigla($value);

    public function queryByCidade($value);

    public function queryByEstado($value);

    public function queryByCor($value);

    public function queryByEstadio($value);

    public function queryByPatrimonio($value);

    public function queryByAno($value);

    public function deleteByNome($value);

    public function deleteBySigla($value);

    public function deleteByCidade($value);

    public function deleteByEstado($value);

    public function deleteByCor($value);

    public function deleteByEstadio($value);

    public function deleteByPatrimonio($value);

    public function deleteByAno($value);
}

?>