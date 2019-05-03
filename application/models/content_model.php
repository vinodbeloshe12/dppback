<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class content_model extends CI_Model
{
public function create($image,$status,$title,$description)
{
$data=array("image" => $image,"status" => $status,"title" => $title,"description" => $description);
$query=$this->db->insert( "fa_content", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_content")->row();
return $query;
}
function getsinglecontent($id){
$this->db->where("id",$id);
$query=$this->db->get("fa_content")->row();
return $query;
}
public function edit($id,$image,$status,$title,$description)
{
if($image=="")
{
$image=$this->content_model->getimagebyid($id);
$image=$image->image;
}
$data=array("image" => $image,"status" => $status,"title" => $title,"description" => $description);
$this->db->where( "id", $id );
$query=$this->db->update( "fa_content", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_content` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `fa_content` WHERE `id`='$id'")->row();
return $query;
}

public function getContent($id)
{
$query=$this->db->query("SELECT * FROM `fa_content` WHERE `title`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `fa_content` ORDER BY `id` 
                    ASC")->result();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
}
?>
