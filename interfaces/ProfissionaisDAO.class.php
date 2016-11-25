<?php

interface ProfissionaisDAO {

    public function load($idProfissionais, $timesIdTimes);

    public function queryAll();

    public function queryAllOrderBy($orderColumn);

    public function delete($idProfissionais, $timesIdTimes);

    public function insert($profissionai);

    public function update($profissionai);

    public function clean();

    public function queryByNome($value);

    public function queryByDataNascimento($value);

    public function queryByRg($value);

    public function queryByPosicao($value);

    public function queryByTime($value);

    public function queryBySalario($value);

    public function queryByHabilidade($value);

    public function deleteByNome($value);

    public function deleteByDataNascimento($value);

    public function deleteByRg($value);

    public function deleteByPosicao($value);

    public function deleteByTime($value);

    public function deleteBySalario($value);

    public function deleteByHabilidade($value);
}

?>