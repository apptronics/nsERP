<!DOCTYPE html>
<html lang="ko">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>sn-crm</title>
   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/bootstrap/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/bootstrap/css/docs.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>
<body>

<?php 
   if($this->session->userdata('logged_in'))
   {
?>
      <a href="<?php echo base_url('/index.php/auth/logout') ?>">로그아웃</a>
<?php 
   }
?>



<!-- 유저알림 메세지 표시    -->
<?php 
   $message =  $this->session->flashdata('message');
   if($message)
   {
?>
<div class="highlight">
   <?php echo $message; ?>
</div>
<?php

   }
?>

