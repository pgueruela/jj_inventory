<div id="target-content" ></div>

<?php 
include_once 'includes/header.php';
include_once 'includes/dbh.inc.php';
 
$limit = 5;
$sql = "SELECT COUNT(cid) FROM jj_inv_categories";  
$result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_row($result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>
<div class="container-pagination">
	<div align="center">
			<nav class="Page navigation example">
			<ul class='pagination' id="pagination">
			<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
			 if($i == 1):?>
			            <li class='page-item'  id="<?php echo $i;?>"><a class="page-link active"  href='manage_categories.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
			 <?php else:?>
			 <li class="page-item" id="<?php echo $i;?>"><a class="page-link" href='manage_categories.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
			 <?php endif;?> 
			<?php endfor;endif;?> 
			</ul> 
			</nav>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function() {
jQuery("#target-content").load("manage_categories.php?page=1");
    jQuery("#pagination li").live('click',function(e){
 e.preventDefault();
 jQuery("#target-content").html('loading...');
 jQuery("#pagination li").removeClass('active');
 jQuery(this).addClass('active');
        var pageNum = this.id;
        jQuery("#target-content").load("manage_categories.php?page=" + pageNum);
    });
    });
</script> 
