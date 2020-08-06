<?php 
final class QueryStrings{
    public const PIXIV_INSERT_NAME = "INSERT INTO pixiv (idPixiv,pixivName,content,quality,favorite,link) VALUES (:idPixiv, :pixivName, :content, :quality, :favorite, :link)";
    public const PIXIV_INSERT_NO_NAME = "INSERT INTO pixiv (idPixiv,content,quality,favorite,link) VALUES (:idPixiv, :content, :quality, :favorite, :link)";
    public const PIXIV_UPDATE_NAME = "UPDATE pixiv SET `idPixiv`=:idPixiv, `pixivName`=:pixivName, `content`=:content, `quality`=:quality, `favorite`=:favorite, `link`=:link WHERE `Id`=:id";
    public const PIXIV_UPDATE_NO_NAME = "UPDATE pixiv SET `idPixiv`=:idPixiv, `content`=:content, `quality`=:quality, `favorite`=:favorite, `link`=:link WHERE `Id`=:id";
    public const PIXIV_FETCH = "SELECT * FROM pixiv LIMIT 100";

    public const ILLUSTRATORS_INSERT = "INSERT INTO illustrators (`Name`, Source, Content, Comments) VALUES (:name, :source, :content, :comments)";
    public const ILLUSTRATORS_UPDATE = "UPDATE illustrators SET `Name`=:name, Source=:source, Content=:content, Comments=:comments";
    public const ILLUSTRATORS_FETCH = "SELECT * FROM illustrators";

    public const SAUCE_INSERT = "INSERT INTO sauces (`Name`,Viewed,`Description`,Comments) VALUES (:name, :viewed, :description, :comments)";
    public const SAUCE_UPDATE = "UPDATE sauces SET `Name`=:name, Viewed=:viewed, `Description`=:description, Comments=:comments";
    public const SAUCE_FETCH = "SELECT * FROM sauces";
}