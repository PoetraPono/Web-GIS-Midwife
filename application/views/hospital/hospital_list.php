<!doctype html>
<html>
    <head>
        <title>CRUD WEBGIS</title>
        
        <link rel="stylesheet" href="<?php echo base_url('assets-crud/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Hospital List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('hospital/create'),'Create', 'class="btn btn-primary"'); ?>
                 <a href="<?php echo site_url('beranda') ?>" class="btn btn-default">Beranda</a>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('hospital/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('hospital'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Hospital</th>
		<th>X</th>
		<th>Y</th>
		<th>Alamat</th>
		<th>No Telpon</th>
		<th>Foto</th>
		<th>Kecamatan</th>
		<th>Id Post</th>
		<th>Fg1</th>
		<th>Fg2</th>
		<th>Fg3</th>
		<th>Layer</th>
		<th>Action</th>
            </tr><?php
            foreach ($hospital_data as $hospital)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $hospital->nama_hospital ?></td>
			<td><?php echo $hospital->x ?></td>
			<td><?php echo $hospital->y ?></td>
			<td><?php echo $hospital->alamat ?></td>
			<td><?php echo $hospital->no_telpon ?></td>
			<td><?php echo $hospital->foto ?></td>
			<td><?php echo $hospital->kecamatan ?></td>
			<td><?php echo $hospital->id_post ?></td>
			<td><?php echo $hospital->fg1 ?></td>
			<td><?php echo $hospital->fg2 ?></td>
			<td><?php echo $hospital->fg3 ?></td>
			<td><?php echo $hospital->layer ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('hospital/read/'.$hospital->id_hospital),'Read'); 
				echo ' | '; 
				echo anchor(site_url('hospital/update/'.$hospital->id_hospital),'Update'); 
				echo ' | '; 
				echo anchor(site_url('hospital/delete/'.$hospital->id_hospital),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('hospital/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>