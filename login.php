<?
	require_once("include/php/db.inc.php");
	require_once("include/php/preLoad.user.inc.php");
	$db=new db;
	$link=$db->conectar();
	
	$_POST['LoginName']=$db->escapeString(preg_replace(array('/\./','/\-/'),'',$_POST['LoginName']));
	$_POST['LoginClave']=$db->escapeString($_POST['LoginClave']);
	
	if(preg_match('/^[0-9]{7,9}[K,k]{0,1}$/', $_POST['LoginName']))
	{
		$_POST['LoginRut']=number_format(substr($_POST['LoginName'],0,-1),0,',','.')."-".substr($_POST['LoginName'],-1);
	}
	$pwd=base64_encode(md5($_POST['LoginClave']));
	//$db->query("update appUsuarios set clave='$pwd' where rut='12.123.896-9' limit 1");
	$queryLogin="select id,id_perfil_usuario,username,appPermisos from appUsuarios where 
		(
			(rut='".$_POST['LoginRut']."' or username='".$_POST['LoginName']."') 
			and clave='".$pwd."'
		)
	and estado='1'";
	$result_usuarios=$db->query($queryLogin);
	if(mysqli_num_rows($result_usuarios)==0)
	{
		setcookie("sessionActive");
		echo "ERR";
	}
	else
	{
		$row=mysqli_fetch_array($result_usuarios);
		$code=dec_enc('encrypt', ($row['id']));
		setcookie("sessionActive",$code);
		setcookie("sessionUser",dec_enc('encrypt', ($row['appPermisos'])));
		setcookie("sessionUN",dec_enc('encrypt', ($row['username'])));
		setcookie("sessionPU",dec_enc('encrypt', ($row['id_perfil_usuario'])));
		echo "OK";
	}
	
?>
