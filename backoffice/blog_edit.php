<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title>News & Blog | Lawyer House </title>

	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="assets/images/fav.png"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="vendor/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="assets/css/bootstrap-extend.css">
	<link rel="stylesheet" href="assets/css/site.css">


	<!-- Plugins -->
	<link rel="stylesheet" href="vendor/animsition/animsition.css">
	<link rel="stylesheet" href="vendor/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="vendor/switchery/switchery.css">
	<link rel="stylesheet" href="vendor/intro-js/introjs.css">
	<link rel="stylesheet" href="vendor/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="vendor/flag-icon-css/flag-icon.css">
	<link rel="stylesheet" href="assets/css/v2.css">
	<!-- Upload -->
	<link href="vendor/upload/css/jquery.fileuploader.css" media="all" rel="stylesheet">
	<link rel="stylesheet" href="vendor/dropify/dropify.css">

	<!-- Fonts -->
	<link rel="stylesheet" href="assets/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome/font-awesome.min.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!--[if lt IE 9]>
	<script src="vendor/html5shiv/html5shiv.min.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="vendor/media-match/media.match.min.js"></script>
	<script src="vendor/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Scripts -->
	<script src="vendor/breakpoints/breakpoints.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="animsition dashboard">

	<?php $current_file = basename(__FILE__); ?>
	<?php include 'header.php'; ?>
	<?php 
	
	if(!empty($_POST))
	{	

		// print_r(slide_edit());
		// exit;
		if(blog_edit())
		{
			echo '<script>
					alert("แก้ไขข้อมูลสำเร็จ");
					window.location.href = "blog.php"
			      </script>';
			exit;
		}
	}

	if(empty($_GET['id']))
	{
		header('location: blog.php');
		exit;
	}
	
	$blog_detail = blog_detail($_GET['id']);
	?>

	<!-- Page -->
	<div class="page">
		<div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-xxl-12 col-lg-12">		
					<!-- Panel Static Labels -->
		          	<div class="panel">
			            <div class="panel-heading">
			              <h3 class="panel-title">Edit</h3>
			            </div>
			            <div class="panel-body container-fluid">
			              	<form id="serviceAdd" name="serviceAdd" class="form-horizontal" method="post" enctype="multipart/form-data">
				                <div class="form-group form-material" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="urlname">URL Name</label>
				                  	<input type="text" class="form-control" id="urlname" name="urlname" value="<?php echo $blog_detail->url_name; ?>" required>
				                </div>
				                <div class="form-group form-material" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="keyword">Keyword</label>
				                  	<input type="text" class="form-control" id="keyword" name="keyword" value="<?php echo $blog_detail->keyword; ?>" required>
				                </div>
				                <div class="form-group form-material" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="title">Blog Name(TH)</label>
				                  	<input type="text" class="form-control" id="name" name="name" value="<?php echo $blog_detail->blog_name; ?>" required>
				                </div>
				                <div class="form-group form-material" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="title">Blog Name(EN)</label>
				                  	<input type="text" class="form-control" id="name_en" name="name_en" value="<?php echo $blog_detail->blog_name_en; ?>" required>
				                </div>
								<div class="form-group form-material" data-plugin="formMaterial">
									<label class="form-control-label" for="detail">Description(TH)</label>
									<textarea class="form-control summernote" rows="4" placeholder="Detail" id="editor" name="description">
											<?php echo $blog_detail->description; ?>
									</textarea>
								</div>
								<div class="form-group form-material" data-plugin="formMaterial">
									<label class="form-control-label" for="detail">Description(EN)</label>
									<textarea class="form-control summernote" rows="4" placeholder="Detail" id="editor_en" name="description_en">
											<?php echo $blog_detail->description_en; ?>
									</textarea>
								</div>
								<div class="form-group form-material form-material-file" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="image">Images Cover</label>
			                      	<input type="file" id="covImg" name="covImg" data-plugin="dropify" data-default-file="<?php echo '../img/blog/' . $blog_detail->id . '/' . $blog_detail->img_cover; ?>" data-allowed-file-extensions="png jpg"/>
									<i class="help-block"><i>Image size: 1200x800px</i></p>
				                </div>
				                <div class="text-right">
				                	<input type="hidden" name="blog_id" value="<?php echo $blog_detail->id; ?>">
						            <button type="submit" class="btn btn-animate btn-animate-side btn-success">
						              	<span><i class="icon wb-check" aria-hidden="true"></i> Save</span>
						            </button>
						            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline" onclick="window.location.href = 'blog.php';">
						              	<span><i class="icon wb-close" aria-hidden="true"></i> Close</span>
						            </button>
          						</div>
			              	</form>
			            </div>
		          	</div>
		          	<!-- End Panel Static Labels -->			
				</div>
			</div>
		</div>
	</div>
	<!-- End Page -->
	
	<?php include 'footer.php'; ?>
	
	<!-- Core-->
	<script src="vendor/babel-external-helpers/babel-external-helpers.js"></script>
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/popper-js/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.js"></script>
	<script src="vendor/animsition/animsition.js"></script>
	<script src="vendor/mousewheel/jquery.mousewheel.js"></script>
	<script src="vendor/asscrollbar/jquery-asScrollbar.js"></script>
	<script src="vendor/asscrollable/jquery-asScrollable.js"></script>
	<script src="vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

	<!-- Plugins -->	
	<!-- <script type="text/javascript" src="vendor/summernote/summernote-bs4.js"></script> -->
	<script src="vendor/switchery/switchery.js"></script>
	<script src="vendor/intro-js/intro.js"></script>
	<script src="vendor/screenfull/screenfull.js"></script>
	<script src="vendor/slidepanel/jquery-slidePanel.js"></script>
	<script src="vendor/skycons/skycons.js"></script>
	<script src="vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
	<script src="vendor/matchheight/jquery.matchHeight-min.js"></script>
	<script src="vendor/ckeditor/ckeditor.js"></script>
	<!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->

	<!-- Custom Theme Scripts -->
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="plugin/moment-2.10.2/moment.min.js"></script>
	<script type="text/javascript" src="plugin/bootstrap-datetimepicker-4.17.37/bootstrap-datetimepicker.min.js"></script>

	<script type="text/javascript">var uploadUrl = 'upload.php';</script>

	<script>
		CKEDITOR.replace( 'editor', {

		} );
		CKEDITOR.replace( 'editor_en', {

		} );
	</script> 

	<!-- Scripts -->
	<script src="assets/js/Component.js"></script>
	
	<script src="assets/js/Plugin.js"></script>
	<script src="assets/js/Base.js"></script>
	<script src="assets/js/Config.js"></script>

	<script src="assets/js/Section/Menubar.js"></script>
	<script src="assets/js/Section/GridMenu.js"></script>
	<script src="assets/js/Section/Sidebar.js"></script>
	<script src="assets/js/Section/PageAside.js"></script>
	<script src="assets/js/Plugin/menu.js"></script>

	<script src="assets/js/config/colors.js"></script>
	<script src="assets/js/config/tour.js"></script>

	<!-- Page -->
	<script src="assets/js/Site.js"></script>
	<script src="assets/js/Plugin/asscrollable.js"></script>
	<script src="assets/js/Plugin/slidepanel.js"></script>
	<script src="assets/js/Plugin/switchery.js"></script>
	<script src="assets/js/Plugin/matchheight.js"></script>

	<script src="assets/js/v1.js"></script>
	<!-- Upload -->
	<script src="vendor/upload/js/jquery.fileuploader.js" type="text/javascript"></script>
	<script src="vendor/upload/js/custom.js" type="text/javascript"></script>
	<script src="vendor/dropify/dropify.min.js"></script>

</body>
</html>
