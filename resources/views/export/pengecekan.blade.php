<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'><strong>ABID HUSAIRI, S.H., M.</strong><strong>Kn.</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'><strong>PEJABAT PEMBUAT AKTA TANAH</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'>Jl.&nbsp;Banjar Indah II No. 1 RT.&nbsp;010&nbsp;RW. 002</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'>Kel. Pemurus Dalam, Kec. Banjarmasin Selatan,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'>Kota Banjarmasin,&nbsp;Telepon 081349668998</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'>E-mail : <u>abidhusairi.mkn@gmail.com</u></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>Nomor &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <strong>&nbsp;{{ $nomor }}</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Lampiran &nbsp; &nbsp; &nbsp; &nbsp; : 1 (satu) berkas.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>H a l &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <strong><u>Pengecekan</u></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Kepada Yth. :</p>
<h3 style='margin-top:10.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;'><em><span style='font-family:"Times New Roman",serif;color:windowtext;'>Kepala Kantor Pertanahan Kota</span></em><em><span style='font-family:"Times New Roman",serif;color:windowtext;'>&nbsp;</span></em><em><span style='font-family:"Times New Roman",serif;color:windowtext;'>Banjarmasin</span></em></h3>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Di &ndash;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><u>BANJARMASIN</u></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Dengan hormat,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:36.0pt;'>Sehubungan akan dilaksanakannya perbuatan hukum Jual Beli / Hibah/ Roya/ Tukar-Menukar / Pembebanan Hak Tanggungan/ Pembagian Hak Bersama di Kantor kami, atas {{ $jenis }} No. {{ $data->sertifikat }}<strong>/{{ $data->kelurahan }}</strong> tercatat atas nama: {{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}<strong>.----------&nbsp;</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:36.0pt;'>Dengan ini kami mohon agar kiranya dapat dilaksanakan proses Pengecekan di Kantor Pertanahan ini,------------------------------------------------------------------------------------------------------------------------&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Adapun kelengkapan yang menyertai pendaftaran ini, terlampir :--------------------------</p>
<ol start="1" style="margin-bottom:0cm;margin-top:0cm;" type="1">
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Fotocopy Kartu Tanda Penduduk &amp; Kartu Keluarga ;-------------------------------</li>
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Sertifikat Asli {{ $data->jenis_sertifikat }} No. {{ $data->sertifikat }} ;------------------------------------------------------</li>
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Surat Kuasa ;----------------------------------------------------------------------------------------------- &nbsp;</li>
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Form Permohonan ;---------------------------------------------------------------------------------------&nbsp;</li>
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>{{ $tambahan1 }} ;---------------------------------------------------------------------------------------&nbsp;</li>
    <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>{{ $tambahan2 }} ;---------------------------------------------------------------------------------------&nbsp;</li>
</ol>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:36.0pt;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:36.0pt;'>Demikian permohonan ini kami sampaikan, atas segala perhatian dan kerjasama yang baik, kami menghaturkan terima kasih.-------------------------------------------------------------------------------------&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Banjarmasin, {{ $date }}.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hormat Kami,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><u>ABID HUSAIRI, S.H., M.Kn</u></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong><strong>PEJABAT PEMBUAT AKTA TANAH</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:144.0pt;text-align:center;line-height:150%;'><strong>Kota Banjarmasi</strong><strong>n</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
</body>
</html>
