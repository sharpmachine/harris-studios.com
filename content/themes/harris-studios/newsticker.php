<?php if (is_front_page()): ?>
  <div class="newsticker">
    <div class="container">
      <strong>What's Next?:</strong> <a href="#"><?php echo wp_trim_words("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eos itaque voluptatem autem dolor eligendi cum quam perferendis cupiditate odio.", 10 ); ?> <i class="fa fa-caret-right"></i></a>
    </div>
  </div>
<?php endif; ?>
