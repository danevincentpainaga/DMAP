<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="http://localhost/ci_project/public/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="http://localhost/ci_project/public/jqwidgets/jqwidgets/styles/jqx.energyblue.css" />

<script type="text/javascript" src="http://localhost/ci_project/public/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxgrid.js"></script>

<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxgrid.columnsresize.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxgrid.filter.js"></script>
<script type="text/javascript" src="http://localhost/ci_project/public/jqwidgets/jqwidgets/jqxdockpanel.js"></script>
</head>
<body>
<?php //print_r($userdata); ?>

<div id="jqxgrid"></div>

<script type="text/javascript">
	var data = [
		{ "empName": "test", "age": "67", "address":"Belison" },
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison" },
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
		{ "empName": "test", "age": "67", "address":"Belison"},
	 	{ "empName": "wow", "age": "40", "address":"Belison"}
	 	];
 	var source =
		{
		    datatype: "json",
		    datafields: [
		        { name: 'empName' },
		        { name: 'age' },
		        { name: 'address' },
		    ],
		    localdata: data
		};
		var dataAdapter = new $.jqx.dataAdapter(source);

 	(function($){

      $("#jqxgrid").jqxGrid({
                width: 400,
                height:50,
                source: dataAdapter,
                autoheight: true,
                theme: 'energyblue',
                columns: [
                  { text: 'Employee', datafield: 'empName', width: 250 },
                  { text: 'Age', datafield: 'age', width: 150 },
                  { text: 'Address', datafield: 'address', width: 150 }
                ]
            });
 	})(jQuery)
 </script>

</body>
</html>