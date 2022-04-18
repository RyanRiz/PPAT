<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong>SURAT KUASA</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:5.0pt;'><u><span style="text-decoration:none;">&nbsp;</span></u></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-indent:36.0pt;line-height:12.0pt;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>Saya yang bertanda-tangan dibawah ini : &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:7.1pt;line-height:16.0pt;'>1. &nbsp;Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;Tempat/Tanggal Lahir &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('tempat_lahir')->implode('[]', '"') }}, {{ $penjual }};&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('pekerjaan')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;'>&nbsp;&nbsp;Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;text-align:justify;'>&nbsp; No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $data->ktp_penjual }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:7.1pt;line-height:16.0pt;'>2. Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Tempat/Tanggal Lahir &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('tempat_lahir')->implode('[]', '"') }}, {{ $pembeli }};&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('pekerjaan')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;'>&nbsp;Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;text-align:justify;'>&nbsp;No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $data->ktp_pembeli }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:14.2pt;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-indent:18.0pt;line-height:16.0pt;'>--selaku <strong>Pihak Pemberi Kuasa</strong>.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-indent:18.0pt;line-height:16.0pt;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>Dengan ini menyatakan dengan sesungguhnya dan dengan sebenarnya memberi kuasa &nbsp;kepada:&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $worker->where('id', $data->petugas)->pluck('nama')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $worker->where('id', $data->petugas)->pluck('pekerjaan')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $worker->where('id', $data->petugas)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $worker->where('id', $data->petugas)->pluck('ktp')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $worker->where('id', $data->petugas)->pluck('email')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>No. HP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $worker->where('id', $data->petugas)->pluck('handphone')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-indent:18.0pt;line-height:16.0pt;'>--selaku <strong>Pihak Penerima Kuasa. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>------------------------------------------------------ <strong>K H U S U S</strong>----------------------------------------------------&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:12.6pt;text-indent:-12.6pt;line-height:16.0pt;'>--.untuk melakukan pengurusan dan penyampaian Permohonan Validasi BPHTB dan Pph atas {{ $keterangan }} {{ $data->jenis_sertifikat }} {{ $data->sertifikat }} kepada Kantor Badan Keuangan Daerah (BAKEUDA) dan KPP Pratama Kota Banjarmasin.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>untuk itu Penerima Kuasa berhak untuk :</p>
<ul>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;text-indent:-18.0pt;line-height:16.0pt;'><li> menghadap kepada pejabat-pejabat dari Kantor BAKEUDA setempat untuk memberikan keterangan dan Penjelasan.</li></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'><li> Mengisi formulir-formulir/blanko-blanko, tanda-terima serta menandatanganinya.</li></p>
</ul>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>---Demikian kuasa ini di buat, untuk menjadi alat-bukti tertulis atas pemberian kuasa ini.&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:8.0pt;'><u><span style="text-decoration:none;">&nbsp;</span></u></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>Banjarmasin, {{ $date }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>Pemberi Kuasa, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Penerima Kuasa,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>Materai</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><br></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ $worker->where('id', $data->petugas)->pluck('nama')->implode('[]', '"') }}</p>
</body>
</html>
