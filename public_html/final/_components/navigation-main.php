<?php
$main_navigation = [
    [
        'title' => 'About',
        'url' => 'about.php',
    ],
    [
        'title' => 'Contact',
        'url' => 'contact.php',
    ],
    [
        'title' => 'Book',
        'url' => 'book.php',
    ],

];

?>
<header class="px-2 py-4 bg-black">
  <div class="max-w-7xl flex justify-between mx-auto">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo">
    </a>

    <nav class="text-white flex items-center">
      <?php
      foreach ($main_navigation as $nav_item) {
          echo '<a href="' . $nav_item['url'] . '" class="p-4 inline-block">' . $nav_item['title'] . '</a>';
      }
      if (is_user_logged_in()) {
          echo '<a href="' . site_url() . '/auth/logout.php" class="p-4 inline-block">Logout</a>';
      } else {
          echo '<a href="' . site_url() . '/auth/login.php" class="p-4 inline-block">Login</a>';
      }
?>

    </nav>
    <?php

?>

  </div>
</header>