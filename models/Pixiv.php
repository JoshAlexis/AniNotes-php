<?php 
require_once "./Model.php";
require_once "./QueryStrings.php";

class Pixiv extends Model{
    private $id;
    private $idPixiv;
    private $pixivName;
    private $content;
    private $quality;
    private $favorite;
    private $link;

    public function __construct(int $id = 0, string $idPixiv, string $pixivName, string $content, string $quality, string $favorite, string $link) {
        $this->id = $id;
        $this->idPixiv = $idPixiv;
        $this->pixivName = $pixivName;
        $this->content = $content;
        $this->quality = $quality;
        $this->favorite = $favorite;
        $this->link = $link;
    }

    public function insert(Model $item, PDO $con): bool{
        try{
            if($item->pixivName !== "" || $item->pixivName !== null){
                $stmt = $con->prepare(QueryStrings::PIXIV_INSERT_NAME);
                return $stmt->execute((array) $item);
            }else{
                $stmt = $con->prepare(QueryStrings::PIXIV_INSERT_NO_NAME);
                return $stmt->execute((array) $item);
            }
        }catch(PDOException $e){
            echo "Error on insert {$e->getMessage()}";
        }
    }

    public function update(Model $item, PDO $con): bool{
        try{
            if($item->pixivName !== "" || $item->pixivName !== null){
                $stmt = $con->prepare(QueryStrings::PIXIV_UPDATE_NAME);
                return $stmt->execute((array) $item);
            }else{
                $stmt = $con->prepare(QueryStrings::PIXIV_UPDATE_NO_NAME);
                return $stmt->execute((array) $item);
            }
        }catch(PDOException $e){
            echo "Error on update {$e->getMessage()}";
        }
    }

    public function getAll(PDO $con): array{
        $stmt = $con->prepare(QueryStrings::PIXIV_FETCH);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}