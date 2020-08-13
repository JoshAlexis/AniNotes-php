<?php 
require_once "Model.php";
require_once "./utils/QueryStrings.php";

class Pixiv extends Model{
    public $idPixiv;
    public $pixivName;
    public $content;
    public $quality;
    public $favorite;
    public $link;

    public function __construct() {
        $this->idPixiv = "";
        $this->pixivName = "";
        $this->content = "";
        $this->quality = "";
        $this->favorite = "";
        $this->link = "";
    }

    public function insert(PDO $con){
        try{
            if($this->pixivName === ""){
                $stmt = $con->prepare(QueryStrings::PIXIV_INSERT_NO_NAME);

                $stmt->bindParam(":idPixiv", $this->idPixiv);
                $stmt->bindParam(":content", $this->content);
                $stmt->bindParam(":quality", $this->quality);
                $stmt->bindParam(":favorite", $this->favorite);
                $stmt->bindParam(":link", $this->link);
                
                return $stmt->execute();

            }else{
                $stmt = $con->prepare(QueryStrings::PIXIV_INSERT_NAME);
                
                $stmt->bindParam(":idPixiv", $this->idPixiv);
                $stmt->bindParam(":pixivName", $this->pixivName);
                $stmt->bindParam(":content", $this->content);
                $stmt->bindParam(":quality", $this->quality);
                $stmt->bindParam(":favorite", $this->favorite);
                $stmt->bindParam(":link", $this->link);

                return $stmt->execute();
            }
        }catch(PDOException $e){
            return "Error on insert {$e->getMessage()}";
        }
    }

    public function update(PDO $con, $id){
        try{            
                $stmt = $con->prepare(QueryStrings::PIXIV_UPDATE);

                $stmt->bindParam(":idPixiv", $this->idPixiv);
                $stmt->bindParam(":pixivName", $this->pixivName);
                $stmt->bindParam(":content", $this->content);
                $stmt->bindParam(":quality", $this->quality);
                $stmt->bindParam(":favorite", $this->favorite);
                $stmt->bindParam(":link", $this->link);
                $stmt->bindParam(":id", $id);
                
                return $stmt->execute();
        }catch(PDOException $e){
            return "Error on update {$e->getMessage()}";
        }
    }
}