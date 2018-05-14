<!-- Page Content -->
<div style="margin-top: 75px;" class="container">

	<!-- Hot Blog Post -->
	<div style="position: relative">
		<img class="img-responsive" src="<?php echo base_url('uploads/img/news/')."".$pinned['gambar']['nama_file']?>" alt="">
		<div style="position: absolute; bottom: 0px; left: 0px; padding: 20px; width: 100%; height: max-content; max-height: 100%; background:#7f7f7f; background:rgba(255,255,255,0.5);">
			<h2>
				<a href="#"><?php echo $pinned['judul_news']?></a>
			</h2>
			<p style="width: fit-content; padding: 2px; margin-top: 2px; font-family: Berlin Sans FB">by <?php echo $pinned['author']?></p>
			<p> <?php echo $pinned['waktu_news'];?> | <a style="background: black; border-radius: 4px; color: white; padding-left: 4px; padding-right: 4px; font-family: Open Sans; width: fit-content; font-size: 12px;">teknologi</a></p>
		</div>
	</div>

	<hr>

	<div class="row">
		<?php for($i=0; $i<sizeof($news); $i++):?>
		<?php if($i==3) break;?>
		<div class="col-md-4">

			<!--Blog Post -->
			<img class="img-responsive" src="<?php echo base_url('uploads/img/news/')."".$gambar[$i]['nama_file']?>" alt="">
			<div style="background: #f5f5f5; padding: 16px">
				<h2>
					<a href="#"><?php echo $news[$i]['judul_news']?></a>
				</h2>
				<p style="width: fit-content; padding: 2px; margin-top: 2px; font-family: Berlin Sans FB">by <?php echo $news[$i]['author'] . ", " . $news[$i]['waktu_news'];?></p>
				<a style="background: black; border-radius: 4px; color: white; padding-left: 4px; padding-right: 4px; font-family: Open Sans; width: fit-content; font-size: 12px;">teknologi</a>
			</div>
			
		</div>
		<?php endfor?>

	</div>
	<!-- /.row -->

	<!-- Pager -->
	<div class="pull-right">
		<ul class="pagination">
			<li><a style="color: black; border-radius: 0px; border-color: darkorange" href="#">&larr;</a></li>
			<li><a style="color: black; border-radius: 0px; border-color: darkorange" href="#">&rarr;</a></li>
		</ul>
	</div>

</div>
<!-- /.container -->
