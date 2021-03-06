<?php
  require 'form_process.php';
  $title = "Contact studiolist.io";
  $other_stylesheet = "/form.css";
  include '../header.php';
?>
  <div class="container">  
    <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <h2>Send your request</h2>
      <!-- <h2>Contact Alexander today, and get reply with in 24 hours!</h2> -->
      <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
        <span class="error"><?= $name_error ?></span>
      </fieldset>
      <fieldset>
        <input placeholder="Your email address" type="text" name="email" value="<?= $email ?>" tabindex="2">
        <span class="error"><?= $email_error ?></span>
      </fieldset>
      <!-- <fieldset>
        <input placeholder="Your Phone Number" type="text" name="phone" tabindex="3">
      </fieldset> -->
      <!-- <fieldset>
        <input placeholder="Your website http://..." type="text" name ="url" value="<?= $url ?>" tabindex="3">
        <span class="error"><?= $url_error ?></span>
      </fieldset> -->
      <fieldset>
        <textarea placeholder="Your message to Alexander..." type="text" name="message" value="<?= $message ?>" tabindex="3"></textarea>
        <span class="error"><?= $message_error ?></span>
      </fieldset>
      <fieldset>
        <input id="extra_field" ="" placeholder="…" type="text" name="extra-field" value=""></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
      <div class="success"><?= $success; ?></div >
    </form>
  </div>

<?php include '../footer.php'; ?>