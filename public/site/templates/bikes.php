<?php snippet('header') ?>
<main role="main" class="main"></main>
<div class="padding"><?php $products = $page->product()->toStructure() ?><?php foreach($products as $product) : ?>
  <div class="product"><a href="<?php echo url('bikes/') ?>/<?php echo $product->product_page()?>" class="text-link">
      <h1><?php echo htmlspecialchars($product->product_name(), ENT_QUOTES, 'UTF-8'); ?></h1>
      <div class="underline"></div></a>
    <p class="lead"><?php echo htmlspecialchars($product->product_desc(), ENT_QUOTES, 'UTF-8'); ?></p><a href="<?php echo url('bikes/') ?>/<?php echo $product->product_page()?>" class="product--image"><img src="<?php echo $page->image($product->product_image())->url() ?>"/></a>
    <div class="features--text">
      <h5> </h5>
    </div>
  </div><?php endforeach; ?>
</div><?php snippet('footer') ?>