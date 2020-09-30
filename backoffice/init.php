<?php 
session_start();

function check_login()
{
	if(!empty($_SESSION['user']))
	{
		return true;
	}

	return false;
}

require_once '../config/database.conf.php';
$db_config  = $config['database'][$config['database']['connect_type']];
$db_connected = mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database_name']);

mysqli_set_charset($db_connected, $config['database']['charset']);

if ( isset( $_POST['is_login'] ) ) {

	$password = md5( $_POST['password'] );
	$sql = "
		select *
		from db_admin
		where username = '{$_POST['username']}' and password = '{$password}'
	";

	$result = query($sql);

	if (!empty($result)) {
		$_SESSION['user']['user_id']   	= $result[0]->id;
		$_SESSION['user']['username']  	= $result[0]->username;
		$_SESSION['user']['group_id']  	= $result[0]->group_id;
		$_SESSION['user']['first_name'] = $result[0]->first_name;
		$_SESSION['user']['last_name'] 	= $result[0]->last_name;
		header('location: index.php');
	}
}

function query($command_sql)
{
 GLOBAL $db_connected;

 if(!empty($db_connected) and is_object($db_connected) and (get_class($db_connected) == 'mysqli'))
 {
  $query_resource = mysqli_query($db_connected, $command_sql);
 }
 
 if(preg_match('/^\s*(select)\s*/i', $command_sql))
 {
  if(!empty($query_resource))
  {
   $i  = 0;
   $result = array();
   while($row = mysqli_fetch_object($query_resource))
   {
    $result[$i] = $row;
    $i++;
   }

   mysqli_free_result($query_resource);

   return $result;
  }
 }
 else
 {
  if(!empty($query_resource)) return true;
 }
 
 return false;
}

date_default_timezone_set("Asia/Bangkok");

function slide_list()
{
	$sql	= "SELECT *
				FROM db_banner
				WHERE is_active = '1'
				ORDER BY id ASC";
	
	return query($sql);
}

function slide_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_banner
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function slide_add() {
	$created = date('Y-m-d H:i:s');

	$sql	 = "INSERT INTO db_banner
				(banner_name, created) 
				VALUE 
				('{$_POST['name']}', '{$created}')";
	// exit;
	$added = query($sql);

	if(!empty($added))
	{
		global $db_connected;

		$slide_id = mysqli_insert_id($db_connected);

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/banner/' . $slide_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $storage_path . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				$sql = "UPDATE db_banner SET img_cover = '{$file_name}' WHERE id = '{$slide_id}'";
				query($sql);
			}
		}
	}

	return $added;
}

function slide_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$slide_id 	= $_POST['slide_id'];

	$sql = "UPDATE db_banner
			SET banner_name = '{$_POST['name']}', updated = '{$update_date}'
			WHERE id = '{$slide_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/banner/' . $slide_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_banner SET img_cover = '{$file_name}' WHERE id = '{$slide_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}

function blog_list()
{
	$sql	= "SELECT *
				FROM db_blog
				WHERE is_active = '1'
				ORDER BY id ASC";
	
	return query($sql);
}

function blog_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_blog
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function blog_add() {
	$created = date('Y-m-d H:i:s');

	$sql	 = "INSERT INTO db_blog
				(url_name, keyword, blog_name, description, created) 
				VALUE 
				('{$_POST['urlname']}', '{$_POST['keyword']}', '{$_POST['name']}', '{$_POST['description']}', '{$created}')";
	// exit;
	$added = query($sql);

	if(!empty($added))
	{
		global $db_connected;

		$blog_id = mysqli_insert_id($db_connected);

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/blog/' . $blog_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $storage_path . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				$sql = "UPDATE db_blog SET img_cover = '{$file_name}' WHERE id = '{$blog_id}'";
				query($sql);
			}
		}
	}

	return $added;
}

function blog_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$blog_id 	= $_POST['blog_id'];

	$sql = "UPDATE db_blog
			SET url_name = '{$_POST['urlname']}', keyword = '{$_POST['keyword']}', blog_name = '{$_POST['name']}', description = '{$_POST['description']}', updated = '{$update_date}'
			WHERE id = '{$blog_id}'";
	// exit;
	$updated = query($sql);

	if(!empty($updated))
	{
		global $db_connected;

		if(!empty($_FILES['covImg']))
		{
			$file_name		= $_FILES['covImg']["name"];
			$file_name		= preg_replace('/[^\w\._]+/', '_', $file_name);
			$filePath 		= '../img/blog/' . $blog_id . '/';
			$file_path		= $filePath . $file_name;

			if ( !is_dir($filePath) ) {
				mkdir($filePath);
			}
			
			if(file_exists($file_path))
			{
				$number			= 2;
				$file_exists	= true;
				$file_extension	= null;

				preg_match('/(\.([a-zA-Z]+))$/i', $file_name, $matchs);
				if(!empty($matchs[2]))
				{
					$file_extension = $matchs[2];
				}

				$file_name_only	= preg_replace("/(\.{$file_extension})/i", null, $file_name);

				while(file_exists($file_path))
				{
					$file_name = $file_name_only . "_{$number}.{$file_extension}";
					$file_path = $filePath . $file_name;
					
					$number++;
				}
			}

			$moved = move_uploaded_file($_FILES['covImg']["tmp_name"], $file_path);

			if($moved)
			{
				/*$originalFile 	= $file_path;
				$targetFile 	= $file_path;

				resizeImg( $originalFile, $targetFile, $file_extension, 1000, 1000 );*/
				$sql = "UPDATE db_blog SET img_cover = '{$file_name}' WHERE id = '{$blog_id}'";
				query($sql);
			}
		}
	}

	return $updated;
}

function service_list()
{
	$sql	= "SELECT *
				FROM db_service
				WHERE is_active = '1' AND is_sub = '0'
				ORDER BY id ASC";
	
	return query($sql);
}

function service_detail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_service
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function service_add() {
	$created = date('Y-m-d H:i:s');

	$sql	 = "INSERT INTO db_service
				(url_name, keyword, service_name, description, created) 
				VALUE 
				('{$_POST['urlname']}', '{$_POST['keyword']}', '{$_POST['name']}', '{$_POST['description']}', '{$created}')";
	// exit;
	$added = query($sql);

	return $added;
}

function service_edit() {
	$update_date 	= date('Y-m-d H:i:s');
	$service_id 	= $_POST['service_id'];

	$sql = "UPDATE db_service
			SET url_name = '{$_POST['urlname']}', keyword = '{$_POST['keyword']}', service_name = '{$_POST['name']}', description = '{$_POST['description']}', updated = '{$update_date}'
			WHERE id = '{$service_id}'";
	// exit;
	$updated = query($sql);

	return $updated;
}

?>

