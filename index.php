<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Graphic Covid-19</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<?php
  $json = file_get_contents('https://api.kawalcorona.com/indonesia');
  $data = json_decode($json, true);
  // var_dump($json); die;
?>
<?php
  $json_p = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
  $data_p = json_decode($json_p);
  // var_dump($data_p); die;
 ?>

<div class="container">
		<section class="section1">
        <div class="positif">
          <h3>Positif</h3>
          <img src="assets/img/sad-u6e.png" alt="">
          <h1 style=""><?php echo $data[0]['positif'] ?></h1><span> Orang</span>
        </div>
        <div class="meninggal">
          <h3>Meninggal</h3>
          <img src="assets/img/emoji-LWx.png" alt="">
          <h1 style=""><?php echo $data[0]['meninggal'] ?></h1><span> Orang</span>
        </div>
        <div class="sembuh">
          <h3>Sembuh</h3>
          <img src="assets/img/happy-ipM.png" alt="">
          <h1 style=""><?php echo $data[0]['sembuh'] ?></h1><span> Orang</span>
        </div>
		</section>

    <div class="row row-cards mt-5">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive service">
											<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Provinsi</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
													</tr>
												</thead>
												<tbody>
                          <?php
                          if(!empty($data_p)){
                            $no=1;
                            foreach ($data_p as $key => $val) {
                              if (!empty($val)) {
                                foreach ($val as $p => $value) {
                           ?>
													<tr>
														<td><?php echo $no++ ?></td>
														<td><?php echo $value->Provinsi; ?></td>
                            <td style="color: red;"><?php echo $value->Kasus_Posi; ?></td>
                            <td><?php echo $value->Kasus_Semb; ?></td>
                            <td><?php echo $value->Kasus_Meni; ?></td>
													</tr>
                        <?php }}}} ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
</div>


<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script> -->
<style src="assets/js/jquery-3.4.1.min.js" type="text/javasript"></style>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style src="assets/js/bootstrap.bundle.min.js" type="text/javasript"></style>
    <style src="assets/js/popper.min.js" type="text/javasript"></style>
    <style src="assets/js/jquery.sparkline.min.js" type="text/javasript"></style>
    <style src="assets/js/circle-progress.min.js" type="text/javasript"></style>
    <style src="assets/js/jquery.rating-stars.js" type="text/javasript"></style>
    <style src="assets/js/Chart.bundle.js" type="text/javasript"></style>
    <style src="assets/js/utils.js" type="text/javasript"></style>
    <style src="assets/js/d3.v5.min.js" type="text/javasript"></style>
    <style src="assets/js/c3-chart.js" type="text/javasript"></style>
    <style src="assets/js/jquery.mask.min.js" type="text/javasript"></style>
    <style src="assets/js/jquery.mCustomScrollbar.concat.min.js" type="text/javasript"></style>
    <style src="assets/js/horizontal-menu.js" type="text/javasript"></style>
    <style src="assets/js/jquery.peity.min.js" type="text/javasript"></style>
    <style src="assets/js/peitychart.init.js" type="text/javasript"></style>
    <style src="assets/js/raphael.min.js" type="text/javasript"></style>
    <style src="assets/js/morris.js" type="text/javasript"></style>
    <style src="assets/js/sidebar.js" type="text/javasript"></style>
    <style src="assets/js/index43.js" type="text/javasript"></style>
    <style src="assets/js/stiky.js" type="text/javasript"></style>
    <style src="assets/js/custom.js" type="text/javasript"></style>
</body>
</html>
