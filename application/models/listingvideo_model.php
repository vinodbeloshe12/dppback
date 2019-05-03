<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class listingvideo_model extends CI_Model
{
public function create($listing,$order,$status,$video)
{
  echo $listing;
$data=array("lid" => $listing,"video" => $video,"order" => $order,"status" => $status);
$query=$this->db->insert( "fa_videos", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_videos")->row();
return $query;
}
public function edit($id,$order,$status,$video)
{
$data=array("order" => $order,"video" => $video,"status" => $status);
if($video != "")
  $data['video']=$video;
$this->db->where( "id", $id );
$query=$this->db->update( "fa_videos", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_videos` WHERE `id`='$id'");
return $query;
}
public function getvideobyid($id)
{
$query=$this->db->query("SELECT `video` FROM `fa_videos` WHERE `id`='$id'")->row();
return $query;
}
}
?>