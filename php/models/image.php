<?php
/**
 *
 */
class photo
{

  function __construct()
  {
    try {
        $this->db = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname.'', $dbuser, $dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

  }
  // public function newPhoto($url,$title,$description,$user_id)
  // {
  //   $req=$this->db->prepare("INSERT INTO images (url,title,description,user_id) VALUES (?,?,?,?)");
  //   $req->execute([$url,$title,$description,$user_id]);
  //
  // }

  public function getAllImage($search='')
  {
    $search2='%'.$search.'%';
    $req=$this->db->query("SELECT * FROM images WHERE description LIKE '$search2' ");
    $resultat=$req->fetchAll();
    return $resultat;
  }




}


 ?>
