<?php
/**
 *
 */
class photo
{
  
  public $db;
  function __construct()

  {
    try {
        $this->db = new PDO('pgsql:host=ec2-54-247-189-141.eu-west-1.compute.amazonaws.com;dbname=da7l266tpqiqfk', 'tksxvpcezdzhex', '0b8cca46d24c349a2e03accc721df09b41584e70b41fed0d24de03a6bd2d1137');
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

  public function getAllImage()
  {
    $req= $this->db->query('SELECT *
FROM photos');
    $resultat=$req->fetchObject();
    return $resultat;
  }




}

$photo= new photo();
$data=$photo->getAllImage();
// var_dump($data);

 ?>
