<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class category_model extends CI_Model
{
public function create($name,$image,$icon,$status,$order)
{
$data=array("name" => $name,"image" => $image,"icon" => $icon,"status" => $status,"order" => $order);
$query=$this->db->insert( "fa_category", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_category")->row();
return $query;
}
function getsinglecategory($id){
$this->db->where("id",$id);
$query=$this->db->get("fa_category")->row();
return $query;
}
public function edit($id,$name,$image,$icon,$status,$order)
{
if($image=="")
{
$image=$this->category_model->getimagebyid($id);
$image=$image->image;
}
$data=array("name" => $name,"image" => $image,"icon" => $icon,"status" => $status,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "fa_category", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_category` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `fa_category` WHERE `id`='$id'")->row();
return $query;
}


public function getstatusdropdown()
{
    $status= array(
         "1" => "Enable",
         "2" => "Disable"
        );
    return $status;
}

public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `fa_category` ORDER BY `id` 
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


public function getAllCategory(){
     $query=$this->db->query("SELECT `id`,`name`,`image`,`icon` FROM `fa_category` WHERE `status`='1' ORDER BY `order` ASC")->result();
      return $query;
}

public function getHomeData(){
    $slider=$this->db->query("SELECT `id`,`image`,`link` FROM `fa_slider` WHERE `status`='1'")->result();
    $category=$this->db->query("SELECT `id`,`name`,`image`,`icon` FROM `fa_category` WHERE `status`='1' ORDER BY `order` ASC")->result();
    $recentlyAdded=$this->db->query("SELECT fa_listing.id,fa_listing.bid, fa_listing.regdate, fa_listing.buisnessname,  fa_listing.addline1, fa_listing.addline2, fa_listing.city, fa_listing.state, fa_listing.pin, fa_listing.country, fa_category.name as 'category',fa_subcategory.name as 'subcategory' FROM fa_listing LEFT OUTER JOIN fa_category ON fa_listing.category=fa_category.id LEFT OUTER JOIN fa_subcategory ON fa_listing.subcategory=fa_subcategory.id WHERE fa_listing.status='1' ORDER BY fa_listing.id DESC LIMIT 0,5")->result();
    $returnObj = new stdClass();
    $returnObj->slider = $slider;
    $returnObj->category = $category;
    $returnObj->recentlyAdded = $recentlyAdded;
    return $returnObj;
}

}
?>




