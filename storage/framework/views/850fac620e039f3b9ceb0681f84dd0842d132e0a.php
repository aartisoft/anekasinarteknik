<section>
	<div id="home-slider" class="_page_wrap">
		<div class="lightSlider slider_controls1" data-autoplay="true" data-dots="true" data-item="3" data-item-lg="2" data-item-md="2" data-item-sm="1" data-margin="5" data-loop="true" data-pager="false">

	<?php if(count($result['banners'])>0): ?>
		<?php $__currentLoopData = $result['banners']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="home-slider" style="background: url(<?php echo e(asset('').'/'.$banners->banners_image); ?>);  background-position: center;">
				<div class="caption">
					<h1>Buy Machinery</h1>
					<h2>Find Construction &amp; Heavy Machinery</h2>
					<a href="#" class="btn btn-primary btn-large">Browse Items</a>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
	
		</div>
	</div>
</section>