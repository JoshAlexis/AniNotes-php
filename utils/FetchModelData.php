<?php 
require_once "./models/DBConnection.php";
require_once "./utils/QueryStrings.php";

class FetchModelData{
    public static function fetchAllPixiv(PDO $con, string $tableName): array{
        $stmt = null;
        switch($tableName){
            case "PIXIV":
                $stmt = $con->prepare(QueryStrings::PIXIV_FETCH);
            break;
            case "ILLUSTRATORS":
                $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_FETCH);
            break;
            case "SAUCES":
                $stmt = $con->prepare(QueryStrings::SAUCE_FETCH);
            break;
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getById(PDO $con, int $id, string $tableName){
        $stmt = null;
        switch($tableName){
            case "PIXIV":
                $stmt = $con->prepare(QueryStrings::PIXIV_FETCH_ID);
            break;
            case "ILLUSTRATORS":
                $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_FETCH_ID);
            break;
            case "SAUCES":
                $stmt = $con->prepare(QueryStrings::SAUCE_FETCH_ID);
            break;
        }
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getDataWhereLike(PDO $con, string $tableName, $chunk){
        $stmt = null;
        switch($tableName){
            case "PIXIV":
                $stmt = $con->prepare(QueryStrings::PIXIV_FETCH_WHERE);
            break;
            case "ILLUSTRATORS":
                $stmt = $con->prepare(QueryStrings::ILLUSTRATORS_FETCH_ID);
            break;
            case "SAUCES":
                $stmt = $con->prepare(QueryStrings::SAUCE_FETCH_ID);
            break;
        }
        $param = '%'.$chunk.'%';
        $stmt->bindParam(":chunk", $param);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}