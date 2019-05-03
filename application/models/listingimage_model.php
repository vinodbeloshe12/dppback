<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class listingimage_model extends CI_Model
{
public function create($listing,$order,$status,$image)
{
$data=array("lid" => $listing,"image" => $image,"order" => $order,"status" => $status);
$query=$this->db->insert( "fa_images", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_images")->row();
return $query;
}
public function edit($id,$order,$status,$image)
{
$data=array("order" => $order,"status" => $status);
if($image != "")
  $data['image']=$image;
$this->db->where( "id", $id );
$query=$this->db->update( "fa_images", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_images` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `fa_images` WHERE `id`='$id'")->row();
return $query;
}
}
?>