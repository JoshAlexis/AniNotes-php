<?php 
require_once "./Model.php";
class Sauce extends Model{
    private $id;
    private $name;
    private $viewed;
    private $description;
    private $comments;

    public function __construct(int $id = 0, string $name, string $viewed, string $description, string $comments) {
        $this->id = $id;
        $this->name = $name;
        $this->viewed = $viewed;
        $this->description = $description;
        $this->comments = $comments;
    }

    public function insert(Model $item, PDO $con): bool{
        try{
            $stmt = $con->prepare(QueryStrings::SAUCE_INSERT);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Error on insert {$e->getMessage()}";
        }
    }

    public function update(Model $item, PDO $con): bool{
        try{
            $stmt = $con->prepare(QueryStrings::SAUCE_UPDATE);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Error on update {$e->getMessage()}";
        }
    }

    public function getAll(PDO $con): array{
        $stmt = $con->prepare(QueryStrings::SAUCE_FETCH);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}