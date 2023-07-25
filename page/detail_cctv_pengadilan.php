    <div class="container over z-depth-1">
    <div class="section">

	<?php

	
	switch ($_GET['satker']) {
	case "PTA.Pbr"://1
	$nama="Pengadilan Tinggi Agama Pekanbaru";
	$link='https://s.pta-pekanbaru.go.id/sijew';
    break;
	case "PA.Pbr"://1
	$nama="Pengadilan Agama Pekanbaru Kelas IA";
	$link='https://s.pta-pekanbaru.go.id/ix2de';
    break;
	

	case "PA.Rgt"://4
	$nama="Pengadilan Agama Rengat Kelas IB";
   $link='https://s.pta-pekanbaru.go.id/fjwjd';
        
    break;
	case "PA.Dum"://5
	$nama="Pengadilan Agama Dumai Kelas IB";
	$link='https://cctv.badilag.net/display/satker/e4e2811696afa7467566864645253ced';
        
    break;
	case "PA.Pkc"://6
	$nama="Pengadilan Agama Pangkalan Kerinci Kelas II";
		$link='https://s.pta-pekanbaru.go.id/08d3p';
      
    break;
	case "PA.Ppg"://7
	$nama="Pengadilan Agama Pasir Pengaraian Kelas IB";
	$link='https://s.pta-pekanbaru.go.id/x6m6g';
       
    break;
	case "PA.Utj"://8
	$nama="Pengadilan Agama Ujung Tanjung Kelas IB";
		$link='https://s.pta-pekanbaru.go.id/wefr4';
    
    break;
	case "PA.Bkls"://9
	$nama="Pengadilan Agama Bengkalis Kelas II";
	$link='https://s.pta-pekanbaru.go.id/s8f09';
        
    break;
	case "PA.Slp"://10
		$nama="Pengadilan Agama Selatpanjang Kelas II";
	$link='https://s.pta-pekanbaru.go.id/h68uy';
       break;
	case "PA.Tbh"://11
	$nama="Pengadilan Agama Tembilahan Kelas II";
		$link='https://s.pta-pekanbaru.go.id/q76s1';
          
    break;	
	case "PA.Sak"://12
	$nama="Pengadilan Agama Siak Sri Indrapura Kelas II";
	$link='https://s.pta-pekanbaru.go.id/aii42';
        
    break;	
	case "PA.Tlk"://13
	$nama="Pengadilan Agama Teluk Kuantan Kelas II";
$link='https://s.pta-pekanbaru.go.id/qikyp';
            break;	
	
	
	
	case "PA.Bkn"://17
	$nama="Pengadilan Agama Bangkinang Kelas IB";
  	$link='https://s.pta-pekanbaru.go.id/cwdwe';
          
	break;
	
	default:
    $nama= "Satker Tidak Terdaftar!";
	
	}
	?>

    <div class="row ">
                <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">
				<?php echo $nama;?>
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
    <iframe class="iframe-round" allow="autoplay;  fullscreen" src="<?php echo $link;?>"></iframe>
	
	
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