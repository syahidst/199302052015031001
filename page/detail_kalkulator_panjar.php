    <div class="container over z-depth-1">
    <div class="section">

	<?php
	$judul=$_GET['judul'];
		$d = array ('/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');  
	 $s = str_replace($d,'',$judul);
								   
	$pecah=explode('-',$s);
	//echo $pecah[0];
	
	 $prosedur_perkara=mysql_query("SELECT * FROM pengadilan_agama WHERE   id_pengadilan ='$pecah[0]'");
		$r=mysql_fetch_array($prosedur_perkara);
			
			$satker=strtolower($r['kode_satker']);
			$satker=str_replace('.','_',$satker);

	?>
    <div class="row ">
                <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">
				<?php echo $r['nama_satker'];?>
				</h5>    
		<p>
				<style>
.div-round {
	overflow: hidden;
	position: relative;
	z-index: 10;
	-webkit-border-radius: 20px;
	border-radius: 20px;
}

.div-round::before {
	display: block;
	content: "";
}

.iframe-round {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	width: 100%;
	height: 100%;
	border: 0;
	-webkit-border-radius: 20px;
	border-radius: 20px;
}
</style>

<style>
.loading {
    /* Absolute position */
    left: 0;
    position: absolute;
    top: 0;

    /* Take full size */
    height: 100%;
    width: 100%;

    /* Center */
    align-items: center;
    display: flex;
    justify-content: center;
}

</style>

<div class="loading" id="loading">
       <img src="https://mobileapp.pta-pekanbaru.go.id/images/loading.gif" width="200px"/>
    </div>

<div class="div-round" style="width: 100%; height: 700px;">
    <iframe class="iframe-round" allow="autoplay;  fullscreen" src="https://app-pendukung.pta-pekanbaru.go.id/panjar_pengadilan/<?php echo$satker;?>/"></iframe>
	
	
</div>
		</p>
        
      
        </div>
    </div>
    


    
    </div>
</div>

<script>
	const iframeEle = document.getElementsByTagName("iframe")[0];
const loadingEle = document.getElementById('loading');

iframeEle.addEventListener('load', function() {
    // Hide the loading indicator
    loadingEle.style.display = 'none';

    // Bring the iframe back
    iframeEle.style.opacity = 1;
});
	</script> 