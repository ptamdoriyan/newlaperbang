<?php

function notifputusan($target, $no_perkara, $tgl_reg_banding, $status_perkara)
{
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.fonnte.com/send',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,

		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array(
			'target' => $target,
			'message' => "Assamualaikum Wr Wb. 
			Berikut informasi perkara banding nomor: 
			" . $no_perkara . "
			
			1. Telah terdaftar pada PTA Manado tanggal: " . $tgl_reg_banding . "
			2. Dengan status saat ini: " . $status_perkara . " ke Pengadilan Tingkat Pertama
			
			Ini adalah sistem pemberitahuan otomatis perkara banding anda.
			___________________________________
			Ketik informasi untuk mengetahui perintah lainnya. 
			SIPEKA PTA Manado",
			'delay' => '2'
		),
		CURLOPT_HTTPHEADER => array(
			"Authorization: sAZJpFT7ntDM4+!gJ+h-"
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// echo $response;
}
