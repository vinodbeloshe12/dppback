<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class subcategory_model extends CI_Model
{
public function create($name,$category,$image,$icon,$status,$order)
{
$data=array("name" => $name,"category" => $category,"image" => $image,"icon" => $icon,"status" => $status,"order" => $order);
$query=$this->db->insert( "fa_subcategory", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_subcategory")->row();
return $query;
}
function getsinglesubcategory($id){
$this->db->where("id",$id);
$query=$this->db->get("fa_subcategory")->row();
return $query;
}
public function edit($id,$name,$category,$image,$icon,$status,$order)
{
if($image=="")
{
$image=$this->subcategory_model->getimagebyid($id);
$image=$image->image;
}
$data=array("name" => $name,"category" => $category,"image" => $image,"icon" => $icon,"status" => $status,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "fa_subcategory", $data );
return 1;
}


public function getAllCategoryById($id){
    $query=$this->db->query("SELECT `id`, `name`, `order`, `image`, `icon` FROM `fa_subcategory` WHERE `status`=1 AND `category`='$id' ORDER BY `order` ASC")->result();
    return $query;
}


public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_subcategory` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `fa_subcategory` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `fa_subcategory` ORDER BY `id` 
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
