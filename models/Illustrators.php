<?php 
require_once "./Model.php";
require_once "./QueryStrings.php";

class Illustrators extends Model{
    private $id;
    private $name;
    private $source;
    private $content;
    private $comments;

    public function __construct(int $id = 0, string $name, string $source, string $content,
    string $comments) {
        $this->id = $id;
        $this->name = $name;
        $this->source = $source;
        $this->content = $content;
        $this->comments = $comments;
    }

    public function insert(Model $item, PDO $con): bool{
        try{
            $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_INSERT);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Error on insert {$e->getMessage()}";
        }
    }

    public function update(Model $item, PDO $con): bool{
        try{
            $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_UPDATE);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Error on insert {$e->getMessage()}";
        }
    }

    public function getAll(PDO $con): array{
        $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_FETCH);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}