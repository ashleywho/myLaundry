<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>mylaundry</title>	
  	<script src="/mylaundry/resources/js/jquery.min.js"></script>
  	<script src="/mylaundry/resources/js/popper.min.js"></script>
  	<script src="/mylaundry/resources/js/bootstrap.min.js"></script>
  	<!-- Font Awesome -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/mylaundry/resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/mylaundry/resources/assets/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/daterangepicker/daterangepicker.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="/mylaundry/resources/css/bootstrap-datepicker.standalone.css">
	<!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/mylaundry/resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/mylaundry/resources/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/mylaundry/resources/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- summernote -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- DataTables -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/mylaundry/resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Toastr -->
  	<link rel="stylesheet" href="/mylaundry/resources/plugins/toastr/toastr.min.css">

  	<!-- fullCalendar -->
	<link rel="stylesheet" href="/mylaundry/resources/plugins/fullcalendar/main.min.css">
	<link rel="stylesheet" href="/mylaundry/resources/plugins/fullcalendar-daygrid/main.min.css">
	<link rel="stylesheet" href="/mylaundry/resources/plugins/fullcalendar-timegrid/main.min.css">
	<link rel="stylesheet" href="/mylaundry/resources/plugins/fullcalendar-bootstrap/main.min.css">
  	<style>
	.btn-group-xs > .btn, .btn-xs {
	  padding: .25rem .4rem;
	  font-size: .875rem;
	  line-height: .5;
	  border-radius: .2rem;
	}
	</style>
	<script src="https://rawgit.com/neo4j-contrib/neovis.js/master/dist/neovis.js"></script>
	<script type="text/javascript">

        var viz;

        function draw() {
            var config = {
                container_id: "viz",
                server_url: "bolt://localhost:7687",
                server_user: "neo4j",
                server_password: "test",
                labels: {
          "Filing":{
            caption:"FilingNo",
            icon:"Ikon ke"
          },
          "Cases":{
            caption:"CaseName"
          },
                },

                relationships: {
        
                },
                initial_cypher: "MATCH p=()-[r:FILE_CONTAIN_CASE]->() RETURN p LIMIT 25"
            };

            viz = new NeoVis.default(config);
            viz.render();
        }
    </script>

</head>