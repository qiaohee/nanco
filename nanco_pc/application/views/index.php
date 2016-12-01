
<!-- Start of Page Container -->
<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of sidebar -->
			<aside class="span2 page-sidebar">
				<section class="widget">
					<div class="quick-links-widget">
						<h3 class="title">全部教程</h3>
						<ul id="menu-quick-links" class="menu clearfix">
							<?php foreach($type as $k=>$v){?>
							<li><a href="#<?php echo $v['linkurl'];?>"><?php echo $v['typename'];?></a></li>
							<?php }?>
						</ul>
					</div>
				</section>

			</aside>
			<!-- end of sidebar -->

			<!-- start of page content -->
			<div class="span10 page-content">

				<?php foreach($type as $k=>$v){?>
					<div class="row home-category-list-area">
						<div id="<?php echo $v['linkurl'];?>" class="span10">
							<h2><?php echo $v['typename'];?></h2>
						</div>
					</div>
					<?php $num = ceil($v['son_num']/3);for($i=0;$i<=$num;$i++){?>
						<div class="row-fluid top-cats">
							<?php foreach(array_slice($v['son_type'],$i*3,3) as $key=>$val){?>
							<section class="span4 item-top">
								<a href="<?php echo site_url('/'.$val['link'].'/'.$val['link'].'_'.$val['linkurl']);?>">
									<h4 class="category">
										<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/'.$val['link'].'.png')?>">
										<?php echo $val['typename'];?>
									</h4>
									<div class="category-description">
										<p><?php echo $val['describe'];?></p>
									</div>
								</a>
							</section>
							<?php }?>
						</div>
					<?php }?>
				<?php }?>
				</div>
			</div>
			<!-- end of page content -->

		</div>
	</div>
</div>
<!-- End of Page Container -->