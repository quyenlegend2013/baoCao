<?php
	/*require("connect/connect.php");
	session_start();
	if($_SESSION["user"]=="")
	{
		header("location:login.php");
	}
	$sql		=	"SELECT * FROM student";
	$rs			=	mysqli_query($conn, $sql);
	$rowtotal	=	mysqli_num_rows($rs);
	$pagesize	=	5;
	$num	=ceil($rowtotal/$pagesize);*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Võ Sinh</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
  <!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css"/>

<link rel="SHORTCUT ICON">
<script src="js/6631cf4e8b.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<!--<script type="text/javascript" src="js/bootstrap-material-design.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css"/>-->

<script type="text/javascript">
				function loaddata(){
					$.ajax({
					url: 'loaddata.php',
					type: 'POST',
					data: {
						res: 1
					},
					success: function(response){
						$('.danhsach').html(response);
						//$("#delete").attr("disabled", true);
						//$("#edit").attr("disabled", true);
						
					}
				})
				}
				
				function dosearch() {
				$('#tim').keyup(function(){
					var txt=$('#tim').val();
					$.post('search.php',{data: txt},function(data){
						if(txt=="")
						{
							phanTrang(1);
						}
						else
						{
							$('.danhsach').html(data);
						}
						
						})
					})};
					
				function deleteStudent(studentID) {
					if (confirm("Do you want to delete this student?")) {
						$.ajax({
							url: 'deleteCandidate.php?studentID=' + studentID,
							method: 'POST',
							success: function (data) {
								
								phanTrang(1);
							},
							
						});
					} else {
						//alert("Cancel");
					}
		
				}
				
				function phanTrang(i)
				{
					$.ajax({
					url: 'loadPhanTrang.php?i='+i,
					type: 'POST',
					success: function(response){
						$('.danhsach').html(response);
						//$("#delete").attr("disabled", true);
						//$("#edit").attr("disabled", true);
						
					}
				})
				}
		
</script>
</head>
<body onload="phanTrang(1);">
	
    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
       <div class="sidebar-heading text-center"><b style="font-size:17px;">Teakwondo</b></div>
      
      <div class="list-group list-group-flush">
              <a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Trang chủ</a>
        <a href="voSinh.php" class="list-group-item list-group-item-action bg-light">Võ sinh</a>
        <a href="donVi.php" class="list-group-item list-group-item-action bg-light">Đơn vị</a>
        <a href="thongKe.php" class="list-group-item list-group-item-action bg-light">Thống kê</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

     <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-warning" id="menu-toggle"><i class="fas fa-bars"></i></button>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      <div class="container-fluid">
        
			<div class="row mt-2 ml-1">
            	<p>Võ sinh</p>
            </div>
            <div class="row">
            	<div class="col-4" style="margin-left:60%;">
                	<!--<input type="text" placeholder="Search..." class="form-control" id="tim" onclick="dosearch()" />-->
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search..." id="tim" onClick="dosearch();" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" onclick="startSpeech();" type="button"><i class="fas fa-microphone"></i></button>
                      </div>
                    </div>
                    
                     <script type="text/javascript">
				var r=document.getElementById("tim");
				function startSpeech()
				{
					if('webkitSpeechRecognition' in window)
					{
					var speedRecord= new webkitSpeechRecognition();
					speedRecord.continuous = true;
					speedRecord.interimResults = true;
					speedRecord.lang = 'vi-VN';
					speedRecord.start();
					var final = '';
					speedRecord.onresult =function(event){
						var interim = '';
						for(var i=event.resultIndex;i<event.results.length;i++)
						{
							var tran=event.results[i][0].transcript;
							tran.replace("\n","<br>");
							if(event.results[i].isFinal)
							{
								final += tran;
							}
							else
							{
								interim += tran;
							}
						}
						r.value = final  + interim;
						var t=final;
						$.post('search.php',{data:t},function(data){
						if(t=="") //add  t.indexOf("xóa")!=-1
						{
							//r.value="";
							phanTrang(1);
						}
						else
						{
							$('.danhsach').html(data);
							speedRecord.stop();
							
						}
						})
						
						
						};
					speedRecord.onspeechend =function(){speedRecord.stop(); };
					speedRecord.onerror =function(event){};
					
					}
					else
					{
						r.value=' dont found ';
					}
					
				}
            </script>
                    
                </div>
            </div>
            
            <div class="mb-2 mt-2 card card-body">
            	<div class="row">
            	<div class="col-3"><button type="button" class="btn btn-success" onclick="location.href='addCandidate.php'">+ Add Candidate</button></div>
                <div class="col-2" style="margin-left:40%;"><button type="button" class="btn btn-raised btn-info" onclick="location.href='importExcelCandidate.php'">Import Data</button></div>
    			<div class="col-2"><button type="button" class="btn btn-raised btn-info" onclick="location.href='handsomeTable.php'">Export Data</button></div>
                </div>
   			 </div>
            
            <div class="card card-body mb-3">
            	<table class="table table-striped" style="text-align:center">
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Email</th>
                                <th>Event Name</th>
                                <th></th>
                                <th>Active</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="danhsach" ></tbody>         
                    </table>
                    <div class="row" style="margin-left:78%;">
						<?php
                             //$num	=ceil($rowtotal/$pagesize);
                             for ($i=1; $i<=$num; $i++)
                             {
                                  echo '<button type="button" class="btn btn-raised btn-secondary" onclick="phanTrang(' .$i.');">'.$i.'</button>&nbsp;&nbsp;&nbsp;';
                             }
                            
                        ?>

                    </div>
            </div>
      </div>
    </div>
 </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

    		
</body>
</html>