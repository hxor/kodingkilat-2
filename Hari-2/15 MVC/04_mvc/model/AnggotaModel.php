<?php // file: oopmvc/model/AnggotaModel.php

class AnggotaModel
{
    public function openDbConnection()
    {
        $link = new PDO("mysql:host=localhost;dbname=db_mvc", 'root', '');
        return $link;
    }

    public function closeDbConnection(&$link)
    {
        $link = null;
    }

    public function getAllAnggota()
    {
        $link = $this->openDbConnection();

        $member = $link->prepare("SELECT * FROM member");
        $member->execute();

        $anggota = array();
        while ($row = $member->fetch()) {
            $anggota[] = $row;
        }
        $this->closeDbConnection($link);

        return $anggota;
    }

    public function getAnggotaById($id)
    {
        $link = $this->openDbConnection();

        $query = 'SELECT * FROM member WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->closeDbConnection($link);

        return $row;
    }
}