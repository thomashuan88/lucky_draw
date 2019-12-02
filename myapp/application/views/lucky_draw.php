<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>抽奖转盘</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<form class="needs-validation" id="infoform" novalidate>
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold">Your Information</h4>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button> -->
			</div>
			<div class="modal-body mx-3">
				<div class="md-form mb-2">
				<!-- <i class="far fa-user prefix grey-text"></i> -->
				<!-- <div class="invalid-feedback">Name is required</div> -->
				<input type="text" id="username" class="form-control"  maxlength="10" required>
				<label data-error="" data-success="" for="username">Your Name</label>
				<div class="invalid-feedback">Name is required</div>
				</div>

				<div class="md-form mb-2">
				<!-- <i class="fas fa-envelope prefix grey-text"></i> -->
				<input type="email" id="email" class="form-control" required>
                <label data-error="wrong" data-success="right" for="email">Your Email</label>
                <div class="invalid-feedback">Please Enter Email Address</div>
				</div>

				<div class="md-form mb-2">
				<!-- <i class="fas fa-phone prefix grey-text"></i> -->
				<input type="text" id="phone" class="form-control" required>
                <label data-error="wrong" data-success="right" for="phone">Your Phone</label>
                <div class="invalid-feedback">Please Enter Phone Number</div>
				</div>

				<div class="md-form mb-2">
					<!-- <i class="fas fa-phone prefix grey-text"></i> -->
					<input type="text" id="qq" class="form-control" pattern="\d*" minlength="4" maxlength="10">
                    <label data-error="wrong" data-success="right" for="qq">QQ</label>
                    <div class="invalid-feedback">Please Enter QQ Number</div>
				</div>

				<div class="md-form mb-2">
				<!-- <i class="fas fa-phone prefix grey-text"></i> -->
				<input type="text" id="wechat" class="form-control" maxlength="50" minlength="4" pattern="[a-zA-Z0-9._\s]+" >
                <label data-error="wrong" data-success="right" for="wechat">Wechat</label>
                <div class="invalid-feedback">Please Enter Wechat ID</div>
				</div>
                <div class="md-form mb-2">
                    <input type="text" id="otp_number" class="form-control" value="" required />
                    <div class="invalid-feedback">OTP is required</div>
                    <button class="btn btn-info btn-sm btn-rounded" type="button" id="request_otp">Request OTP</button>
                </div>
				<!-- <div class="md-form mb-4">
				<i class="fas fa-lock prefix grey-text"></i>
				<input type="password" id="defaultForm-pass" class="form-control validate">
				<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
				</div> -->
		
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button class="btn btn-primary btn-sm btn-rounded" type="submit">Submit</button>
			</div>
		</form>
		</div>
	</div>
</div>

<div class="modal fade" id="draw_result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<h1>抽奖转盘</h1>
<div class="dowebok">
	<div class="rotary">
		<img class="hand" src="assets/images/z.png" alt="">
	</div>
	<div class="list">
		<strong>100%中奖</strong>
		<h4>中奖用户名单</h4>
		<ul>
			<li>
				<span>154**88</span> <span>获得1个月绿钻</span>
			</li>
			<li>
				<span>6161***034</span> <span>获得11个月绿钻</span>
			</li>
			<li>
				<span>2349***224</span> <span>获得1个月绿钻</span>
			</li>
			<li>
				<span>433***54</span> <span>获得2个月绿钻</span>
			</li>
			<li>
				<span>5154***234</span> <span>获得4个月绿钻</span>
			</li>
			<li>
				<span>3213***123</span> <span>获得2个月绿钻</span>
			</li>
			<li>
				<span>898****362</span> <span>获得9个月绿钻</span>
			</li>
		</ul>
	</div>
</div>

<!-- <script src="js/jquery-1.8.3.min.js"></script> -->

<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.rotate.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">


$(function(){
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>'; 
    var luckynum = 0;

	$('#modalLoginForm').modal('show');

	$('#infoform').submit(function(){ 
        // 
        $.post('lucky_draw/save_luckydraw', {
            [csrfName]:csrfHash, 
            username:$('#username').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            qq: $('#qq').val(),
            wechat: $('#wechat').val(),
            otp_number: $('#otp_number').val()
        }).done(function(data) {
            // csrfName = data.csrfname;
            // csrfHash = data.csrfhash;
            data = JSON.parse(data);
            luckynum = data.draw_result;
            $('#modalLoginForm').modal('hide');
        });
		return false; 
    });

    $('#draw_result').on('hide.bs.modal', function (e) {
        document.location.reload(true);
    })
    
    $('#request_otp').click(function() {
        var phonenumber = $('#phone').val();
        var phoneNumber_pattern = /^[0-9-()+]{5,20}$/;

        if (phonenumber.match(phoneNumber_pattern)) { 

            $(this).siblings('.invalid-feedback').text("OTP is required").css("display","none");

            $.post('lucky_draw/sendotp', {[csrfName]:csrfHash, phone:phonenumber}).done(function(data) {
                $('#request_otp').text("Resend OTP");
                data = JSON.parse(data);
                csrfName = data.csrfname;
                csrfHash = data.csrfhash;
                console.log(data);
            },"json");

        } else {
            // error message at otp request
            $(this).siblings('.invalid-feedback').text("Invalid Phone Number").css("display","block");
        }

        return false;
    });

	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		event.preventDefault();
		event.stopPropagation();
		}
		form.classList.add('was-validated');
		}, false);
		});
	}, false);

	var $hand = $('.hand');

	$hand.click(function(){
		// var data = [1,2,3,4,5,6,7, 8, 9, 10, 11, 12];
		// data = data[Math.floor(Math.random()*data.length)];
		var data = luckynum;

		switch(data){
			case 1:
				rotateFunc(1,16,'恭喜你抽中了1个月绿钻');
				break;
			case 2:
				rotateFunc(2,47,'恭喜你抽中了2个月绿钻');
				break;
			case 3:
				rotateFunc(3,76,'恭喜你抽中了3个月绿钻');
				break;
			case 4:
				rotateFunc(4,106,'恭喜你抽中了4个月绿钻');
				break;
			case 5:
				rotateFunc(5,135,'恭喜你抽中了5个月绿钻');
				break;
			case 6:
				rotateFunc(6,164,'恭喜你抽中了6个月绿钻');
				break;
			case 7:
				rotateFunc(7,193,'恭喜你抽中了7个月绿钻');
				break;
			case 8:
				rotateFunc(7,223,'恭喜你抽中了8个月绿钻');
				break;
			case 9:
				rotateFunc(7,252,'恭喜你抽中了9个月绿钻');
				break;
			case 10:
				rotateFunc(7,284,'恭喜你抽中了10个月绿钻');
				break;
			case 11:
				rotateFunc(7,314,'恭喜你抽中了11个月绿钻');
				break;
			case 12:
				rotateFunc(7,345,'恭喜你抽中了12个月绿钻');
				break;
		}
	});

	var rotateFunc = function(awards,angle,text){
		$hand.stopRotate();
		$hand.rotate({
			angle: 0,
			duration: 5000,
			animateTo: angle + 1440,
			callback: function(){
                $('#draw_result').modal('show').find('.modal-body').text(text);
				// alert(text);
			}
		});
	};
});
</script>

</body>
</html>