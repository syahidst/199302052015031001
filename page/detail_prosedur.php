    <div class="container over z-depth-1">
    <div class="section">

	<?php
	$judul=$_GET['judul'];
		$d = array ('/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');  
	 $s = str_replace($d,'',$judul);
								   
	$pecah=explode('-',$s);
	//echo $pecah[0];
	
	 $prosedur_perkara=mysql_query("SELECT * FROM kelola_konten WHERE jenis_konten='prosedur_perkara' and id_konten ='$pecah[0]'");
		$r=mysql_fetch_array($prosedur_perkara);
			
	

	?>
    <div class="row ">
                <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">
				<?php echo $r['judul_konten'];?>
				</h5>    
		<p>
		<?php echo $r['isi_konten'];?>
		</p>
        
      
        </div>
    </div>
    


    
    </div>
</div>