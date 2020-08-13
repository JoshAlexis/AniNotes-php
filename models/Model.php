<?php 
abstract class Model{
    abstract public function insert(PDO $con);
    abstract public function update(PDO $con, int $id);
}