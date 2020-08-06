<?php 
abstract class Model{
    abstract protected function insert(Model $item, PDO $con): bool;
    abstract protected function update(Model $item, PDO $con): bool;
    abstract protected function getAll(PDO $con): array;
}