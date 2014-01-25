

<div class="container" >
    
    <section class="highlight ">

		<div class="col-sm-10 col-sm-offset-2">
	      <h1>로그인 하세요.</h1>
	    </div>

		<form class="form-horizontal" role="form" action="<?php echo base_url('/index.php/auth/authentication') ?>" method="post">
		  <div class="form-group">
		    <label for="inputID" class="col-sm-2 control-label">아이디</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputID" placeholder="ID" name="userid" />
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-2 control-label">패스워드</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" />
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">로그인</button>
		    </div>
		  </div>
		
		</form>
	</section>
</div>

