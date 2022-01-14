<div style="background:green" class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	  		<p id="msg"></p>
	    	<h3 class="box-title"><b>ATTENTION</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p align="justify">You Must Be Registered For Hire Worker. Register Yourself And Log In To the System And Hire Different Type of Household Worker As You Need.</p>
	  	</div>
	</div>
</div>



<div style="background:green" class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	  		<p id="msg"></p>
	    	<h3 class="box-title"><b>CONTACT WITH US</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<b><a>info@householdworkerhire.com</a></b>
	  	</div>
	</div>
</div>



<div style="background:green" class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>SOCIAL FEED</b></h3></br>
	  	</div>
	  	<div class='box-body'>
			<p align="justify">Follow us with these social platform to get recent update about our Workers and Services.</p>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-instagram"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-youtube"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-pinterest"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-whatsapp"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-linkedin"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-twitter"></i></a>
	  	</div>
		
	</div>
</div>


<div style="background:green" class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	  		<p id="msg"></p>
	    	<h3 class="box-title"><b>NEWSLETTERS</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p align="justify">Enter your email address to receive new worker information and other useful information right to your inbox for free.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="email" id="email" name="email" class="form-control" required>
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat" id="subscribe"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>


<script type="text/javascript">
  $(function(){
    $(document).on('click', '#subscribe', function(e){
      alert('hhhhh');
      e.preventDefault();
      var email = $('#email').val();
      $.ajax({
        type: 'POST',
        url: 'subscribe.php',
        data: {email:email},
        contentType: false
        success: function(msg){
          if(msg=='ok'){
            $('#msg').html('<span style="color:green;">Thanks for your subscription!</span>')
          }else{
            $('#msg').html('<span style="color:red;">'+msg+'!</span>')
          }
        }
      });
    });
  });
</script>

