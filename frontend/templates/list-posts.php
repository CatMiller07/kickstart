<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/14/2016
 * Time: 6:27 PM
 */
?>
<?php require_once 'includes/temps/header.php';?>
<?php foreach ($posts as $post): ?>
    <h3>Post #<?php echo htmlspecialchars($post['id']); ?></h3>
      <p><?php echo implode(' ',array_slice(explode(' ',strip_tags($post['content'])), 0, 10)); ?>[...]</p>
      <a href="<?php echo $this->base->url."/?id=".$post['id'];?>" class="btn btn-primary">Read More</a>
      <hr/>
<?php endforeach; ?>
<?php require_once 'includes/temps/footer.php'; ?>
