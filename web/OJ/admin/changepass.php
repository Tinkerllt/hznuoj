<?php
  /**
   * This file is modified
   * by yybird
   * @2016.03.21
  **/
?>

<?php require_once("admin-header.php");?>
<?php
if (!HAS_PRI("edit_user_profile")) {
	$view_error="You can't edit this user!";
	require_once("error.php");
	exit(1);
}
if(isset($_POST['do'])){
	//echo $_POST['user_id'];
	require_once("../include/check_post_key.php");
	//echo $_POST['passwd'];
	require_once("../include/my_func.inc.php");
	$err_cnt=0;
	$err_str="";
	$user_id=$_POST['user_id'];
	$passwd =$_POST['passwd'];
	if (!preg_match("/^.*(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])\w{6,22}$/", $_POST['passwd'])) {
	$err_str=$err_str."The password must consist of upper case letters, lower case letters and numbers, with a length of 6 ~ 22 digits!\\n";
	$err_cnt++;
	}
	if ($err_cnt>0){
	    print "<script language='javascript'>\n";
	    print "alert('";
	    print $err_str;
	    print "');\n history.go(-1);\n</script>";
	    exit(0);
	}

    if(get_order(get_group($user_id))<=get_order(get_group())){
    	$view_error="You can't edit this user!";
		require_once("error.php");
		exit(1);
    }
    if (get_magic_quotes_gpc ()) {
		$user_id = stripslashes ( $user_id);
		$passwd = stripslashes ( $passwd);
	}
	$user_id=$mysqli->real_escape_string($user_id);
	$passwd=pwGen($passwd);
	$sql="update `users` set `password`='$passwd' where `user_id`='$user_id'  and user_id not in( select user_id from privilege where rightstr='administrator') ";
	$mysqli->query($sql);
	if ($mysqli->affected_rows) echo "Password Changed!";
  else echo "No such user! or He/Her is an administrator!";
}
?>
<title>Change Password</title>
<h1>Change Password</h1><hr>
<form class="form-inline" action='changepass.php' method=post>
	User:<input class="form-control" type=text size=10 name="user_id"><br />
	Pass:<input class="form-control" type=text size=10 name="passwd"><br />
	<?php require_once("../include/set_post_key.php");?>
	<input type='hidden' name='do' value='do'>
	<input class="btn btn-default" type=submit value='Change'>
</form>
<?php 
  require_once("admin-footer.php")
?>
