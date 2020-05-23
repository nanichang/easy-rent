<?php
ob_start();
session_start();
define('DIR_APPLICATION', str_replace('\'', '/', realpath(dirname(__FILE__))) . '/');
if(!file_exists("config.php")){
	header("Location: install/index.php");
	die();
}
unset($_SESSION['step']);
unset($_SESSION['domain']);
include(DIR_APPLICATION."config.php");
include(DIR_APPLICATION."library/maxPower.php");
include(DIR_APPLICATION."library/encryption.php");
include(DIR_APPLICATION."library/helper.php");
$converter = new Encryption;
$helper = new ams_helper;
$helper->removeInstallFolder(ROOT_PATH.'install');

//redirect if session already exist
if(isset($_SESSION['objLogin']) && !empty($_SESSION['objLogin'])){
	if($_SESSION['login_type'] == '1' || $_SESSION['login_type'] == '5'){
		header("Location: dashboard.php");
		die();
	}
	else if($_SESSION['login_type'] == '2'){
		header("Location: o_dashboard.php");
		die();
	}
	else if($_SESSION['login_type'] == '3'){
		header("Location: e_dashboard.php");
		die();
	}
	else if($_SESSION['login_type'] == '4'){
		header("Location: t_dashboard.php");
		die();
	}
}
/*****************************************************************************/
/////////////variables/////////////////////////////////////////////////////////
$msg = false;
$sql = '';
$cookie_name = "ams_lang_code";
//////////////////////////////////////////////////////////////////////////////

if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != ''){
	$user_name = trim(make_safe($link, $_POST['username'])); //Escaping Strings
	$password = $converter->encode(trim(make_safe($link, $_POST['password']))); //Escaping Strings
	//admin
	if($_POST['ddlLoginType'] == '1'){
		$sql = mysqli_query($link,"SELECT *,b.* FROM tbl_add_admin aa left join tblbranch b on b.branch_id = aa.branch_id WHERE aa.email = '".$user_name."' and aa.password = '".$password."'");
	}
	//owner
	if($_POST['ddlLoginType'] == '2'){
		$sql = mysqli_query($link, "SELECT *,b.* FROM tbl_add_owner o left join tblbranch b on b.branch_id = o.branch_id WHERE o.o_email = '".$user_name."' and o.o_password = '".$password."'");
	}
	//employee
	if($_POST['ddlLoginType'] == '3'){
		$sql = mysqli_query($link, "SELECT *,b.* FROM tbl_add_employee e left join tblbranch b on b.branch_id = e.branch_id WHERE e.e_email = '".$user_name."' and e.e_password = '".$password."'");
	}
	//renter
	if($_POST['ddlLoginType'] == '4'){
		$sql = mysqli_query($link, "SELECT *,b.* FROM tbl_add_rent ad left join tblbranch b on b.branch_id = ad.branch_id WHERE ad.r_email = '".$user_name."' and ad.r_password = '".$password."'");
	}
	//super admin
	if($_POST['ddlLoginType'] == '5'){
		$sql = mysqli_query($link, "SELECT * FROM tblsuper_admin WHERE email = '".$user_name."' and password = '".$password."'");
	}
	if(!empty($sql)){
		if($row = mysqli_fetch_assoc($sql)){
			if($_POST['ddlLoginType'] == '5'){
				$branch_list = getBuildingDetails($_POST['ddlBranch'], $link);
				$arr = array(
					'user_id'				=> $row['user_id'],
					'name'					=> $row['name'],
					'email'					=> $row['email'],
					'contact'				=> $row['contact'],
					'password'				=> $_POST['password'],
					'added_date'			=> $row['added_date']
				);
				$arr = array_merge($arr, $branch_list);
				$_SESSION['objLogin'] = $arr;
			}
			else{
				$_SESSION['objLogin'] = $row;
			}
			
			mysqli_close($link);
			$link = NULL;
			
			$_SESSION['login_type'] = $_POST['ddlLoginType'];
			if($_POST['ddlLoginType'] == '1' || $_POST['ddlLoginType'] == '5'){
				header("Location: dashboard.php");
				die();
			}
			else if($_POST['ddlLoginType'] == '2'){
				header("Location: o_dashboard.php");
				die();
			}
			else if($_POST['ddlLoginType'] == '3'){
				header("Location: e_dashboard.php");
				die();
			}
			else if($_POST['ddlLoginType'] == '4'){
				header("Location: t_dashboard.php");
				die();
			}	
		} else {
			$msg = true;
		}
	}
	else{
		$msg = true;
	}
}
//
function getBuildingDetails($bid, $link){
	$sql = mysqli_query($link, "SELECT * from tblbranch WHERE branch_id = ".(int)$bid);
	if($row = mysqli_fetch_assoc($sql)){
		return $row;
	}
	return array();
}
function make_safe($con, $variable){
	$variable = mysqli_real_escape_string($con, strip_tags(trim($variable)));
	return $variable; 
}
$query_ams_settings = mysqli_query($link,"SELECT * FROM tbl_settings");
if($row_query_ams_core = mysqli_fetch_array($query_ams_settings)){
	$lang_code_global = $row_query_ams_core['lang_code'];
	$global_currency = $row_query_ams_core['currency'];
	$currency_position = $row_query_ams_core['currency_position'];
	$currency_sep = $row_query_ams_core['currency_seperator'];
}
$lang_code = "English";
if(isset($_COOKIE[$cookie_name]) && !empty($_COOKIE[$cookie_name])) {
	$lang_code = $_COOKIE[$cookie_name];
	$lang_code_global = $_COOKIE[$cookie_name];
}
include(ROOT_PATH.'language/'.$lang_code_global.'/lang_index.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $_data['application_title']; ?></title>
<!-- BOOTSTRAP STYLES-->
<link rel="stylesheet" type="text/css" href="assets/resources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/resources/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/resources/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="assets/resources/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/resources/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="assets/resources/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/resources/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/resources/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/resources/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="assets/resources/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="assets/resources/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="assets/resources/css/magnific-popup.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/resources/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/resources/css/default.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/resources/css/skins/default.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/resources/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="assets/resources/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/resources/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/resources/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="assets/resources/js/respond.min.js"></script>
    <![endif]-->
<!-- BOOTSTRAP SCRIPTS -->

	<style type="text/css">
		.button-theme {
		    background: #95c41f;
		    border: 2px solid #95c41f;
		}
	</style>
</head>
<body>
	<!-- <div class="page_loader"></div> -->
	<div class="login-section">
    	<div class="form-content-box">
	        <!-- details -->
	        <div class="details">
	            <div class="logo">
	                <a href="/">
	                    <img src="./assets/resources/img/logos/logo.png" alt="logo">
	                </a>
	            </div>
	            <div class="clearfix"></div>
	            <h3><?php echo $_data['sing_in_header_text']; ?></h3>
	            <form onSubmit="return validationForm();" role="form" id="form" method="post">
	            	<?php if($msg) { ?>
						<div id="login_error" align="center">
							<?php echo $_data['wrong_login_msg']; ?>								
						</div>
					<?php } ?>


	                <div class="form-group">
	                    <input type="email" name="username" id="username" class="input-text" placeholder="<?php echo $_data['sing_in_email_placeholder']; ?>">
	                </div>
	                <div class="form-group">
	                    <input type="password" name="password" id="password" class="input-text" placeholder="<?php echo $_data['sign_in_password_placeholder']; ?>">
	                </div>

	                <div class="form-group">
	                    <select name="ddlLoginType" onChange="mewhat(this.value);" id="ddlLoginType" class="form-control">
			                <option value="">--<?php echo $_data['select_type']; ?>--</option>
			                <option value="1"><?php echo $_data['user_1']; ?></option>
			                <option value="2"><?php echo $_data['user_2']; ?></option>
			                <option value="3"><?php echo $_data['user_3']; ?></option>
			                <option value="4"><?php echo $_data['user_4']; ?></option>
			                <option value="5"><?php echo $_data['user_5']; ?></option>
			              </select>
	                </div>
	                <div class="checkbox">	                    
	                    <a href="<?php echo WEB_URL;?>forgetpassword.php" class="link-not-important pull-right">
	                    	<?php echo $_data['forgot_password']; ?>	                    		
	                    </a>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <button type="submit" class="button-md button-theme btn-block">
	                    	<?php echo $_data['sign_in_button_text']; ?>
	                    </button>
	                </div>
	            </form>
	            <ul class="social-list clearfix">
	                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
	                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
	                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
	                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
	            </ul>
	        </div>
	        <div class="footer">
	            <span>
	                <?php echo $_data['dont_have_account']; ?> 
	                <a href="signup.html">
	                	<?php echo $_data['register_here']; ?>
	                </a>
	            </span>
	        </div>
	    </div>
	</div>




<?php if(!maxPower::verifyInstalledDomain($link, true)){ ?>
<div class="modal fade" id="modalVerify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Unregistered Version Alert !!!!</h4>
      </div>
      <div class="modal-body">
		This version is unregistered and you need to buy our license version to continue using our application. Another thing if you try to use same application for multiple domain you can loose your system and important information so kindly use valid license version. <a href="https://codecanyon.net/item/responsive-apartment-management-system/16343942" target="_blank">Click here</a> to purchase our application and follow our installation step or contact with me via email address <a href="mailto:devsolver@gmail.com">devsolver@gmail.com</a> for any help or customization.
      </div>
    </div>
  </div>
</div>
<?php } ?>
<script type="text/javascript">
function validationForm(){
	if($("#username").val() == ''){
		alert("<?php echo $_data['v1'];?>");
		$("#username").focus();
		return false;
	}
	else if($("#password").val() == ''){
		alert("<?php echo $_data['v3'];?>");
		$("#password").focus();
		return false;
	}
	else if($("#ddlLoginType").val() == ''){
		alert("<?php echo $_data['v4'];?>");
		return false;
	}
	else if(!validateEmail($("#username").val())){
		alert("<?php echo $_data['v2'];?>");
		$("#username").focus();
		return false;
	}
	else{
		return true;
	}
}
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function mewhat(val){
	if(val != ''){
		if(val == '5'){
			$("#x_branch").show();
		}
		else{
			$("#x_branch").hide();
		}
	}
	else{
		$("#x_branch").hide();
	}
}
</script>
<input type="hidden" id="web_url" value="<?php echo WEB_URL; ?>" />


<script src="assets/resources/js/jquery-2.2.0.min.js"></script>
<script src="assets/resources/js/bootstrap.min.js"></script>
<script src="assets/resources/js/bootstrap-submenu.js"></script>
<script src="assets/resources/js/rangeslider.js"></script>
<script src="assets/resources/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/resources/js/wow.min.js"></script>
<script src="assets/resources/js/bootstrap-select.min.js"></script>
<script src="assets/resources/js/jquery.easing.1.3.js"></script>
<script src="assets/resources/js/jquery.scrollUp.js"></script>
<script src="assets/resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/resources/js/leaflet.js"></script>
<script src="assets/resources/js/leaflet-providers.js"></script>
<script src="assets/resources/js/leaflet.markercluster.js"></script>
<script src="assets/resources/js/dropzone.js"></script>
<script src="assets/resources/js/jquery.filterizr.js"></script>
<script src="assets/resources/js/jquery.magnific-popup.min.js"></script>
<script src="assets/resources/js/maps.js"></script>
<script src="assets/resources/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/resources/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="assets/resources/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
