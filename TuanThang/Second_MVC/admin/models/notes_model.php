<?php
class notes_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $sth = $this->db->prepare("SELECT * FROM notes");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $this->view->data = $sth->fetchAll();

    }
    public function noteInsert()
    {
        $note_content = $_POST['post_content'];
        $sth = $this->db->prepare("INSERT INTO notes(note_content) VALUES(:note_content)");
        if($sth->execute(array(':note_content'=>$note_content)))
        {
            echo $note_content;
        }else
        {
            echo "failed";
        }
    }
    public function getNoteListings()
    {
        $sth = $this->db->prepare("SELECT * FROM notes");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
}