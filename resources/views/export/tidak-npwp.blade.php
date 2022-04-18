<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong>SURAT PERNYATAAN TIDAK WAJIB MENGGUNAKAN</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong>NOMOR POKOK WAJIB PAJAK</strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:19px;">&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Saya yang bertanda tangan dibawah ini:&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>NIK/No Paspor &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $data->ktp_penjual }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $status }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Jumlah Tanggungan &nbsp; : &nbsp;{{ $tanggungan }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;'>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('alamat')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Telepon &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;{{ $customer->where('ktp', $data->ktp_penjual)->pluck('telepon')->implode('[]', '"') }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>telah menyetorkan Pajak Penghasilan atas penghasilan dari pengalihan hak atas tanah</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>dan/ atau bangunan atau perjanjian pengikatan jual beli atas tanah dan/ atau</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>bangunan beserta perubahannya* tanpa menggunakan Nomor Pokok Wajib Pajak,</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>karena:</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<ul>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;selama tahun {{ $tahun }} memiliki penghasilan sebesar {{ $penghasilan }},-</li></p>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;merupakan Subjek Pajak Luar Negeri. **</li></p>
</ul>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>Pemyataan ini saya buat dengan sebenar-benarnya dan untuk digunakan</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>sebagaimana mestinya.</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Banjarmasin, {{ $date }}</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Yang membuat pernyataan</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</p>
</body>
</html>
