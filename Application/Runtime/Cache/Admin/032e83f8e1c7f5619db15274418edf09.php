<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html" />
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link type="text/css" href="/music/Application/Admin/Public/css/main.css" rel="stylesheet">
<style>
	table{width:100%;}
	table,td{ border-collapse: collapse;background:#fff;border:1px solid gray;}
	td{padding:8px 8px;}
</style>
</head>
<form id="addform" name="addform" " action="/music/index.php/Admin/ImportWorkOrder/uploadExcel" method="post" enctype="multipart/form-data">
	<table >
		<tr>
			<td align="right">请选择导入工单：</td>
			<td> <input id="lefile" type="file"  name="excelData" ></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input   type="submit"    value="开始上传" /></td>
			
		</tr>
	</table>
</form>
<body>
    
</body>
</html>