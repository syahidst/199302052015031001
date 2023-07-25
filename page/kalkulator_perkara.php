<div class="container full subpage ">
        <div class="section">


            
<!-- <div class="container">
  <div class="section"> -->

    
    <ul class="subpages collection z-depth-1">


    
<li class="collection-item subtit"><div class="row ">
                <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Kalkulator Panjar Perkara</h5></div>
    </div>
    </li>
    

        <script>
function popupCenter(url, title) {

return window.open(url, title, 'toolbar=yes, location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=yes');
} 
</script>

    <!--
									<li class="collection-item">
                                      <a onclick="popupCenter('https://www.mahkamahagung.go.id/id', 'myPop1');" href="javascript:void(0);" class="waves-effect">
									  </i><span>Prosedur Perkara Tingkat Pertama</span><i class="arrow mdi mdi-chevron-right"></i></a>
                                  </li>
								  
								  -->
								  
								  <?php
								   function judul_seo($s) {  
								   $c = array (' ');  
								   $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');  
								   $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d  
								   
								   $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua  
								   return $s;  
								 }
								  $no=1;
								  $prosedur_perkara=mysql_query("SELECT * FROM pengadilan_agama where id_pengadilan <>1 ");
									while($r=mysql_fetch_array($prosedur_perkara)){

								  ?>
								  <li class="collection-item">
                                      <a href="home.php?page=detail-kalkulator-panjar-perkara&judul=<?php echo $r['id_pengadilan'].'-'.judul_seo($r['nama_satker']);?>" class="waves-effect"><span><?php echo $no.'. '. $r['nama_satker'];?></span><i class="arrow mdi mdi-chevron-right"></i></a>
                                  </li>
									<?php
									
									$no++;
									}
									?>
								  
    </ul>


  <!-- </div>

</div> -->
    
        </div>
        </div>

