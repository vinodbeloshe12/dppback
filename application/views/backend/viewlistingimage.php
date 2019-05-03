<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch("Listing Image");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">id</th>
<th data-field="image">Image</th>
<th data-field="sorder">Order</th>
<th data-field="status">status</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createlistingimage?id=").$this->input->get("id"); ?>" data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
</div>
</div>
<script>
function drawtable(resultrow) {
    var baseurl="http://admin.findacross.com/uploads/";
    // var baseurl="http://localhost/finda/uploads/";

    if(resultrow.status==1){
        var status="Enabled";
    }else{
        var status="Disabled";
    }
return "<tr><td>" + resultrow.id + "</td><td><img width='100' src='" + baseurl+ resultrow.image + "'></td><td>" + resultrow.order + "</td><td>" + status + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editlistingimage?id=');?>"+resultrow.id+"&lid="+resultrow.lid+"'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=return confirm(\"Are you sure you want to delete?\") href='<?php echo site_url('site/deletelistingimage?id='); ?>"+resultrow.id+"&lid="+resultrow.lid+"'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>