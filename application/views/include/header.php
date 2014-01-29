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
<?php
   $CI =& get_instance();
   if ($this->uri->segment(1) === "schedule")
   {
?>
   <link href="<?php echo base_url('assets/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" />
   <link href="<?php echo base_url('assets/fullcalendar/fullcalendar.print.css') ?>" rel="stylesheet" media="print" />
<?php
}
?>
   <link href="<?php echo base_url('assets/bootstrap/css/docs.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>
<body>



<!-- 헤더메뉴 -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <a class="navbar-brand" href="#">앱트로닉스</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul id="menu-1" class="nav navbar-nav navbar-right">
         <!-- 로그아웃 -->
         <?php 
            if($this->session->userdata('logged_in'))
            {
         ?>
               <li><a href="<?php echo base_url('/index.php/auth/logout') ?>" >로그아웃</a></li>
         <?php 
            }
         ?>
      </ul> <!-- menu-1 -->
   </div> <!-- /.navbar-collapse -->
</nav>




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


<!-- 콘텐츠영역 -->
<div id="page-container" class="row">
