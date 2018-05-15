<?php 
$tst = array();
$limit = 4;
if(sizeof($judul)<4)
{
	$limit = sizeof($judul);
}
for($i = 0; $i<$limit; $i++)
{
	$tst[$i] = rand(0,sizeof($judul));
	if($i == 1)
	{
		do
		{
			$tst[1] = rand(0,sizeof($judul));
		}
		while($tst[1] == $tst[0]);
	}
	else if($i==2)
	{
		do
		{
			$tst[2] = rand(0,sizeof($judul));
		}
		while($tst[0] == $tst[2] || $tst[1] == $tst[2]);
	}
	else if($i==3)
	{
		do
		{
			$tst[3] = rand(0,sizeof($judul));
		}
		while($tst[0] == $tst[3] || $tst[1] == $tst[3] || $tst[2] == $tst[3]);
	}
}
?>
<div class="container" style="margin-top: 75px; margin-bottom: 40px">
	<div class="row">
		<div class="col-md-8">
			<p>NEWS <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px"></span> <a style="color: black"><?php echo $news['tag'];?></a> <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px"></span> <a style="text-transform: uppercase" href="#"><?php echo $news['judul_news'];?></a></p>
			<br>
			<h1><?php echo $news['judul_news'];?></h1>
			<p style="width: fit-content; padding: 2px; margin-top: 2px; font-family: Berlin Sans FB">by <?php echo $news['author'] . ", " . $news['waktu_news'];?></p>
			<br>
			<img class="img-responsive" src="<?php echo base_url('uploads/img/news/')."".$gambar['nama_file']?>">
			<hr>
			<?php echo $news['isi_news'];?>

		</div>
		<div class="col-md-4">
			<br>
			<h3>Artikel Lainnya</h3>
			<hr style="border-color: black; margin: 0px">
			<?php for($i=0; $i<sizeof($tst); $i++): ?>
			<?php echo "<a href='".base_url('news/detail/').$judul[$i]['id_news']."'style='line-height: 50px'>" .$judul[$i]['judul_news']."</a>";
				echo "<hr style='margin: 0px'>";
			?>
			<?php endfor ?>
		</div>
	</div>
</div> 
