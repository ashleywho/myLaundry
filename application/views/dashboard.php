<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item">
						<a href="">Home</a>
					</li>
					<li class="breadcrumb-item active">
						<a href="">???</a>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3>???</h3>
							<p>???</p>
						</div>
						<a class="small-box-footer" href="">Next</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3>???</h3>
							<p>???</p>
						</div>
						<a class="small-box-footer" href="">Next</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3>???</h3>
							<p>???</p>
						</div>
						<a class="small-box-footer" href="">Next</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3>???</h3>
							<p>???</p>
						</div>
						<a class="small-box-footer" href="">Next</a>
					</div>
				</div>
			</div>
			<div class="row">
				<section class="col-lg-6 connectedSortable ui-sortable">
					<div class="card" style="position: relative; left: 0px; top: 0px;">
						<div class="card-header ui-sortable-handle" style="cursor: move;">
							<h4 class="card-title">Sales</h4>
						</div>
						<div class="card-body">
							<div class="tab-content p-0">
								<div id="sales-chart" class="chart tab-pane active" style="position: relative; height: 300px;">
									<div class="chartjs-size-monitor">
										<div class="chartjs-size-monitor-expand">
											<div class=""></div>
										</div>
										<div class="chartjs-size-monitor-shrink">
											<div class=""></div>
										</div>
									</div>
									<canvas id="sales-chart-canvas" class="chartjs-render-monitor" style="height: 300px; display: block; width: 916px;" width="916" height="300"></canvas>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
</div>
</body>
</html>