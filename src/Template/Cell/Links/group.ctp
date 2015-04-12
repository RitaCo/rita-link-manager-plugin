<section id="links-widget" class="vertical">

<?php foreach($links as $link): ?>
    <a target="_blank" href="<?= $link->url?>" class="link-wrap" title="<?= $link->title; ?>">
        <?php
        
        if($link->hasImage) {
             $trgPath =  '/files/links/'. $link->hasImage;
           echo '<img src="'.$trgPath.'" />';
        }

?>
    
    </a>
<?php endforeach; ?>

</section>