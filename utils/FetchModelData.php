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
            default:
                $stmt = false;
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}