<!-- Page Content -->
<div style="margin-top: 75px;" class="container">

	<!-- Hot Blog Post -->
	<div style="position: relative">
		<img class="img-responsive" src="<?php echo base_url('uploads/img/news/')."".$pinned['gambar']['nama_file']?>" alt="">
		<div style="position: absolute; bottom: 0px; left: 0px; padding: 20px; width: 100%; height: max-content; max-height: 100%; background:#7f7f7f; background:rgba(255,255,255,0.5);">
			<h2>
				<a href="<?php echo base_url('news/detail/')."".$pinned['id_news'];?>"><?php echo $pinned['judul_news']?></a>
			</h2>
			<p style="width: fit-content; padding: 2px; margin-top: 2px; font-family: Berlin Sans FB">by <?php echo $pinned['author']?></p>
			<p> <?php echo $pinned['waktu_news'];?> | <a style="background: black; border-radius: 4px; color: white; padding-left: 4px; padding-right: 4px; font-family: Open Sans; width: fit-content; font-size: 12px;"><?php echo $pinned['tag'];?></a></p>
		</div>
	</div>

	<hr>

	<div class="row">
		<?php if(!isset($number)) $number = 1;?>
		<?php for($i=3*($number-1); $i<sizeof($news); $i++):?>
		<?php if($i==3*($number-1)+3) break;?>
		<div class="col-md-4">

			<!--Blog Post -->
			<img class="img-responsive" src="<?php echo base_url('uploads/img/news/')."".$gambar[$i]['nama_file']?>" alt="">
			<div style="background: #f5f5f5; padding: 16px">
				<h2>
					<a href="<?php echo base_url('news/detail/')."".$news[$i]['id_news'];?>"><?php echo $news[$i]['judul_news']?></a>
				</h2>
				<p style="width: fit-content; padding: 2px; margin-top: 2px; font-family: Berlin Sans FB">by <?php echo $news[$i]['author'] . ", " . $news[$i]['waktu_news'];?></p>
				<a style="background: black; border-radius: 4px; color: white; padding-left: 4px; padding-right: 4px; font-family: Open Sans; width: fit-content; font-size: 12px;"><?php echo $news[$i]['tag'];?></a>
			</div>
			
		</div>
		<?php endfor?>

	</div>
	<!-- /.row -->

	<!-- Pager -->
	<div class="pull-right">
		<ul class="pagination">
			<?php if($number>1) echo "<li><a style='color: black; border-radius: 0px; border-color: darkorange' href='". base_url('news/page/').($number-1)."''>&larr;</a></li>";?>
			<?php if(sizeof($news) > 3*$number) echo"<li><a style='color: black; border-radius: 0px; border-color: darkorange' href='".base_url('news/page/').($number+1)."'>&rarr;</a></li>"?>
		</ul>
	</div>

</div>
<!-- /.container -->
