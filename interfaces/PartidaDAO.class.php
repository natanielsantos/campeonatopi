<?php

interface PartidaDAO {

    public function load($id);

    public function queryAll();

    public function queryAllOrderBy($orderColumn);

    public function delete($idpartida);

    public function insert($partida);

    public function update($partida);

    public function clean();

    public function queryByTimeVisitante($value);

    public function queryByTimeMandante($value);

    public function queryByArbitroPrincipal($value);

    public function queryByArbitroAuxiliar1($value);

    public function queryByArbitroAuxiliar2($value);

    public function queryByDataPartida($value);

    public function queryByHoraPartida($value);

    public function deleteByTimeVisitante($value);

    public function deleteByTimeMandante($value);

    public function deleteByArbitroPrincipal($value);

    public function deleteByArbitroAuxiliar1($value);

    public function deleteByArbitroAuxiliar2($value);

    public function deleteByDataPartida($value);

    public function deleteByHoraPartida($value);
}

?>