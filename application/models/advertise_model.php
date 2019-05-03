<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class advertise_model extends CI_Model
{
public function create($lid,$page,$image,$fromDate,$toDate,$status,$link,$user,$type)
{
$data=array("lid" => $lid,"page" => $page,"image" => $image,"fromDate" => $fromDate,"toDate" => $toDate,"status" => $status,"link" => $link,"user" => $user,"type" => $type);
$query=$this->db->insert( "fa_advertise", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("fa_advertise")->row();
return $query;
}
function getsingleadvertise($id){
$this->db->where("id",$id);
$query=$this->db->get("fa_advertise")->row();
return $query;
}
public function edit($id,$lid,$page,$image,$fromDate,$toDate,$status,$link,$user,$type)
{
if($image=="")
{
$image=$this->advertise_model->getimagebyid($id);
$image=$image->image;
}
$data=array("lid" => $lid,"page" => $page,"image" => $image,"fromDate" => $fromDate,"toDate" => $toDate,"status" => $status,"link" => $link,"user" => $user,"type" => $type);
$this->db->where( "id", $id );
$query=$this->db->update( "fa_advertise", $data );
return 1;
}


public function getAllCategoryById($id){
    $query=$this->db->query("SELECT `id`, `name`, `order`, `image`, `icon` FROM `fa_advertise` WHERE `status`=1 AND `category`='$id'")->result();
    return $query;
}


public function delete($id)
{
$query=$this->db->query("DELETE FROM `fa_advertise` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `fa_advertise` WHERE `id`='$id'")->row();
return $query;
}


public function getpagedropdown()
{
    $pagedrp= array(
         "Home" => "Home",
         "Category" => "Category",
         "Subategory" => "Subategory",
         "Listing" => "Listing",
         "Details" => "Details",
        );
    return $pagedrp;
}
public function gettypedropdown()
{
    $type= array(
         "1" => "Vertical",
         "2" => "Horizontal",
        
        );
    return $type;
}


public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `fa_listing` ORDER BY `id` 
                    ASC")->result();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->buisnessname;
}
return $return;
}
}
?>
