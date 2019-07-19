<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/feedback_style.css');?>">
  </head>
  <body>
    <?= form_open('loadbooks/record_feedback',['method'=>'post']);?>
  <div class="contact-form">
    <?php if($this->session->flashdata('msg')):?>
  <h2 style=""><?= $this->session->flashdata('msg');?></h2>
<?php endif;?>
    <h1>Contact Us</h1>
    <div class="txtb">
      <label>Full Name :</label>
      <input type="text" name="un" value="<?= $this->session->userdata('user_id')?>" placeholder="Enter Your Name" readonly>
    </div>

    <div class="txtb">
      <label>Email :</label>
      <input type="email" name="email" value="<?= $this->session->userdata('email')?>" placeholder="Enter Your Email" readonly>
    </div>

    <div class="txtb">
      <label>Phone Number :</label>
      <input type="text" name="mob" value="" placeholder="Enter Your Phone Number">
    </div>

    <div class="txtb">
      <label>Message :</label>
      <textarea name="msg"></textarea>
    </div>
    <button class="btn">Send</button>
    <a href="<?= base_url('loadbooks/index');?>" class="btn btn-primary">Home</a>
  </div>
  </form>
  </body>
</html>
