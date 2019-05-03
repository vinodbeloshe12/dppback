<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class event_model extends CI_Model
{

  

public function create($name_marathi,$name_english,$event_date,$description_marathi,$description_english,$status,$user)
{
$data=array("name_marathi" => $name_marathi,"name_english" => $name_english,"event_date" => $event_date,"description_marathi" => $description_marathi,"description_english" => $description_english,"status" => $status,"user" => $user);
$query=$this->db->insert( "event", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}

public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("event")->row();
return $query;
}
function getsingleevent($id){
$this->db->where("id",$id);
$query=$this->db->get("event")->row();
return $query;
}
public function edit($id,$bid,$buisnessname,$category,$subcategory,$cperson,$contact,$addline1,$addline2,$city,$state,$pin,$country,$keywords,$services,$about,$email,$facebook,$twitter,$google,$linkedin,$status,$type,$user,$date)
{
if($image=="")
{
$image=$this->event_model->getimagebyid($id);
$image=$image->image;
}
$data=array("bid" => $bid,"buisnessname" => $buisnessname,"category" => $category,"subcategory" => $subcategory,"cperson" => $cperson,"contact" => $contact,"addline1" => $addline1,"addline2" => $addline2,"city" => $city,"state" => $state,"pin" => $pin,"country" => $country,"keywords" => $keywords,"services" => $services,"about" => $about,"email" => $email,"facebook" => $facebook,"twitter" => $twitter,"google" => $google,"linkedin" => $linkedin,"status" => $status,"type" => $type,"user" => $user,"date" => $date);
$this->db->where( "id", $id );
$query=$this->db->update( "event", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `event` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
// $query=$this->db->query("SELECT `image` FROM `event` WHERE `id`='$id'")->row();
// return $query;
}


public function gettypedropdown()
{
    $type= array(
         "1" => "Starter",
         "2" => "Advanced",
         "3" => "Pro"
        );
    return $type;
}


public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `event` ORDER BY `id` 
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

