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
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-bottom:6.0pt;text-align:center;'><strong>&nbsp;</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:7.1pt;line-height:16.0pt;'>1. &nbsp;Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;Tempat/Tanggal Lahir &nbsp; &nbsp; : &nbsp; {{ $customer->where('ktp', $data->ktp_penjual)->pluck('tempat_lahir')->implode('[]', '"') }}, {{ $penjual }};&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('pekerjaan')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp;Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $data->ktp_penjual }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:7.1pt;line-height:16.0pt;'>2. &nbsp;Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Tempat/Tanggal Lahir &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('tempat_lahir')->implode('[]', '"') }}, {{ $pembeli }};&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('pekerjaan')->implode('[]', '"') }};</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $data->ktp_pembeli }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:18.0pt;line-height:16.0pt;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:16.0pt;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>Dengan ini memberikan kuasa untuk melakukan pengurusan pengecekan dan Balik Nama {{ $jenis }} Nomor {{ $data->sertifikat }} Kelurahan {{ $data->kelurahan }}, Kecamatan {{ $data->kecamatan }}, &nbsp;tercatat atas nama <strong>: {{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }},</strong> di Kantor Badan Pertanahan Kota Banjarmasin kepada :</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'>Notaris/PPAT</p>
<div style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>
    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left:8px;">
        <li style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp;ABID HUSAIRI, S.H., M.Kn.</li>
    </ol>
</div>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:18.0pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp;Pejabat Pembuat Akta Tanah (PPAT)</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:120.5pt;font-size:16px;font-family:"Times New Roman",serif;text-indent:-102.5pt;'>Alamat Kantor &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp;Jl. Banjar Indah II No.01, RT. 010, RW. 02 , Kel. Pemurus Dalam,</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:120.5pt;font-size:16px;font-family:"Times New Roman",serif;text-indent:-102.5pt;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kec. Banjarmasin Selatan, Kota Banjarmasin. &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:120.5pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:-102.5pt;'>No. KTP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp;3174041010840011</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'>Dan/atau staff</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:18.0pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:115%;'>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $worker->where('id', $data->petugas)->pluck('nama')->implode('[]', '"') }};</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:18.0pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:115%;'>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; {{ $worker->where('id', $data->petugas)->pluck('pekerjaan')->implode('[]', '"') }} ;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:18.0pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:115%;'>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $worker->where('id', $data->petugas)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:18.0pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:115%;'>No. KTP. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; {{ $worker->where('id', $data->petugas)->pluck('ktp')->implode('[]', '"') }}.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Dan apabila pengurusan Pengecekan dan balik nama tersebut telah selesai penerima kuasa dapat mengambil sertifikat tersebut pada kantor Badan Pertanahan setempat.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Demikian surat kuasa ini saya buat dengan sebenar-benarnya untuk dipergunakan sebagaimana mestinya.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Banjarmasin, {{ $date }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Pemberi Kuasa, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Penerima Kuasa,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Materai</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Abid Husairi, S.H., M.Kn.&nbsp; &nbsp; {{ $worker->where('id', $data->petugas)->pluck('nama')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-right:160.75pt;text-align:center;'><strong>&nbsp;</strong></p>
</body>
</html>
