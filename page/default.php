<div class="content-area">


  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle" style="color:white">Data Rekrutmen Programmer MA</h5>
          </div>
  </div>
  




  

<div class="container over transparent pr0 pl0">
    <div class="section pt0 pb0">
      
	  <div class="row ">
                <div class="col s12 pad-0">
<link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


<?php
// (A) CURL FETCH
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://103.226.55.159/json/data_rekrutmen.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
 
// (B) RESULTS
// (B1) ERROR
if (curl_errno($ch)) { echo curl_error($ch); }
 
// (B2) JSON DECODE
else {
 
   
  $decoded = json_decode($result, true);
 $jumlah=count($decoded['Form Responses 1']);
}



// (B3) CURL CLOSE
curl_close($ch);



// (A) CURL FETCH
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://103.226.55.159/json/data_attribut.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
 
// (B) RESULTS
// (B1) ERROR
if (curl_errno($ch)) { echo curl_error($ch); }
 
// (B2) JSON DECODE
else {
 
   
  $decoded2 = json_decode($result, true);
 $jumlah2=count($decoded2['Form Responses 1']);
}


// (B3) CURL CLOSE
curl_close($ch);



  ?>

<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>timestamp</th>
                <th>nama</th>
                <th>nip</th>
                <th>satuan_kerja</th>
                <th>posisi_yang_dipilih</th>
                <th>nilai_1</th>
                <th>nilai_2</th>
                <th>nilai_3</th>
                <th>dokumen</th>
            </tr>
        </thead>
		
        <tbody>
        <?php
		$kol1=0;
		$kol2=1;
		$kol3=2;
		$kol4=3;
		
		for($a=0; $a < $jumlah; $a++){
		?>
			<tr>
                <td><?php  echo $decoded['Form Responses 1'][$a]['id'];?></td>
                <td><?php  echo $decoded['Form Responses 1'][$a]['timestamp'];?></td>
                <td><?php  echo $decoded['Form Responses 1'][$a]['nama'];?></td>
                <td><?php  echo $decoded['Form Responses 1'][$a]['nip'];?></td>
                <td><?php  echo $decoded['Form Responses 1'][$a]['satuan_kerja'];?></td>
                <td><?php  echo $decoded['Form Responses 1'][$a]['posisi_yang_dipilih'];?></td>
                <td><?php  echo $decoded2[$kol1]['value'];?></td>
                <td><?php  echo $decoded2[$kol2]['value'];?></td>
                <td><?php  echo $decoded2[$kol3]['value'];?></td>
                <td><a href="<?php  echo $decoded2[$kol4]['value'];?>" target="_blank">lihat data</a></td>
                <?php
				$kol1=$kol1+4;
				$kol2=$kol2+4;
				$kol3=$kol3+4;
				$kol4=$kol4+4;
				?>
            </tr>
         <?php
		}
		 ?>   
            
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    
        </div>
        </div>
        </div>
</div>














</div><!--.content-area-->


<script>

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
