<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class slider_model extends CI_Model
{
public function create($image,$status,$link,$order)
{
$data=array("image" => $image,"status" => $status,"link" => $link,"order" => $order);
$query=$this->db->insert( "slider", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("slider")->row();
return $query;
}
function getsingleslider($id){
$this->db->where("id",$id);
$query=$this->db->get("slider")->row();
return $query;
}
public function edit($id,$image,$status,$link,$order)
{
if($image=="")
{
$image=$this->slider_model->getimagebyid($id);
$image=$image->image;
}
$data=array("image" => $image,"status" => $status,"link" => $link,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "slider", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `slider` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `slider` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `slider` ORDER BY `id` 
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
