<!DOCTYPE html>

<html>

	<head>
		<title> 페이지 읽기 </title>
		<meta charset="UTF-8" http-equiv="Cache-Control" content="No-Cache">
		<head>
<link rel="stylesheet" href="document.css">
</head>
		<style>
			h1 {
				color:#7a5230;
			}
			hr.title {
				color:#fff8dc
			}
/* 헤더 영역 스타일 지정 */
		   #m_header img {
			float:left; 
			margin-right:20px;
			}

		   #m_header {  
			font-family: 'Serif';
			background-color:#fff8dc;
			border-top:2px solid #7a5230;
			border-right:2px solid #7a5230;
			border-left: 2px solid #7a5230;
			height:150px;
		        }
		   .tbar li {                  
			list-style-type:none;
			display:inline;
			float:right; 
  
			border:2px solid #7a5230;
			border-radius:5px;
			background-color:white;
			padding:5px 7px;
			margin-right:10px; 
		        }

		   #m_header a {   
			text-decoration:none;
			color:#7a5230;
			}


/* 섹션 영역 스타일 지정 */
		   #m_main iframe {
 		        width:100%;
 		        height:600px; 
 		        border:0;
		   	}

		   #m_main {
			width:100%;
			background-color:#fff;
			float:left;
			text-align:center
		        }

/* 전체 너비 및 가운데 배치 */
		#total_lay{
			max-width:1000px;
			margin:0 auto;
			}
		</style>
<?php
$naeyong = htmlspecialchars($_POST['contents']);
$chamgo = htmlspecialchars($_POST['age']);
?>
		<script type="text/javascript">

// 아이프레임 세로 자동 리사이징 (세로값을 자동으로 추출하여 스크롤바 생기지 않음)

function resizeFrame(frm) {

frm.style.height = "auto";

contentHeight = frm.contentWindow.document.body.scrollHeight;

frm.style.height = contentHeight + 4 + "px";

}

</script>
	</head>

	<body>
		<?php
		$name = $_POST['name'];
		if(!isset($name)){
			$name = "frontpage";
		}
		$getturn = $_GET['return'];
		if(isset($getturn)){
			$name = $getturn;
		}
		?>
		<section id="m_main">
			<span class="tbar">
			<ul>
				<li> 
					<form action="do.php" method="post">
						<input type="hidden" name="less" value="<?php echo $name;?>" />
						<input type="submit" value="✍" />
					</form>
				</li>
		   </ul>
			</span>
<span id="d">
			<h1><?php echo $name;?></h1>
			<hr class="title">
			<iframe src="d/<?php echo $name; ?>.html" name="m_view" width="1000px" height="0px" marginwidth="0px" marginheight="0px" frameborder="no" scrolling="no" onload="resizeFrame(this)">
		   </iframe>
		   <iframe src="" name="m_text" width="1000px" height="0px" marginwidth="0px" marginheight="0px" frameborder="no" onload="resizeFrame(this)">
		   </iframe>
	</span>
		</section>
	   </div>
	</body>

</html>