<?php 

require_once 'config/database.conf.php';
$db_config  = $config['database'][$config['database']['connect_type']];
$db_connected = mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database_name']);

mysqli_set_charset($db_connected, $config['database']['charset']);

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

function bannerList()
{
	$sql = "SELECT *
			FROM db_banner
            WHERE is_active = '1'
			ORDER BY id ASC";

	return query($sql);
}

function new_blog()
{
	$sql = "SELECT *
			FROM db_blog
            WHERE is_active = '1'
			ORDER BY id DESC
			LIMIT 3";

	return query($sql);
}

function blogList()
{
	$page	= (!empty($_GET['page'])) ? $_GET['page'] : 1;
	$limit 	= 12;
	$start 	= ($page * $limit) - $limit;
	
	$sql = "SELECT *
			FROM db_blog
            WHERE is_active = '1'
            ORDER BY id DESC
            LIMIT {$start}, {$limit}";

	return query($sql);
}

function blog_Detail($id)
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

function blogRelated()
{
	$sql = "SELECT *
			FROM db_blog
			WHERE is_active = '1'
			ORDER BY RAND()
			LIMIT 3";

	return query($sql);
}

function blogCount()
{

    $wheres[] = "is_active = '1'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode(' AND ', $wheres) : null;

	$sql	= "SELECT count(1) AS counter
				FROM db_blog
				{$where}";

	$result = query($sql);
	
	return (!empty($result)) ? current($result) : false;
}

function service_list()
{
	$sql = "SELECT *
			FROM db_service
            WHERE is_active = '1' AND is_sub = '0'
			ORDER BY id ASC";

	return query($sql);
}

function service_Detail($id)
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

function teamList()
{
	$sql = "SELECT *
			FROM db_team
            WHERE is_active = '1'
			ORDER BY id ASC";

	return query($sql);
}

function realList()
{
	$sql = "SELECT *
			FROM db_real_estate
            WHERE is_active = '1' AND is_sub = '0'
			ORDER BY id ASC";

	return query($sql);
}

function realDetail($id)
{	
	$wheres[] = "id = '{$id}'";
	$where	= (!empty($wheres)) ? 'WHERE ' . implode('AND ', $wheres) : null;

	$sql	= "SELECT *
				FROM db_real_estate
				{$where}
				LIMIT 1";
	
	$result = query($sql);

	return (!empty($result)) ? current($result) : false;
}

function pagination( $total, $limit = 12 )
{
	$page 	= ( !empty($_GET['page']) ) ? $_GET['page'] : 1;
	$total 	= ceil( $total / $limit );
	$prev 	= $page - 1;
	$next 	= $page + 1;

	return array(
		'total'		=> $total
		,'page'		=> $page
		,'prev'		=> $prev
		,'next'		=> $next
	);
}

?>

