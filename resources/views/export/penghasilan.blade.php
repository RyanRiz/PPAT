<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style="font-size:13px;">Daftar Pembayaran Pajak Penghasilan</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:200%;'><strong><span style="font-size:13px;line-height:200%;">(untuk &nbsp;1 Objek Pengalihan)</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-bottom:6.0pt;line-height:115%;'><strong><span style="font-size:13px;line-height:115%;">Identitas Objek Pengalihan</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">NOP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->nop }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Alamat Objek &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $data->lokasi_objek }},&nbsp;</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Desa/Kelurahan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $data->kelurahan }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Kecamatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $data->kecamatan }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Kabupaten/Kota &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->kabupaten }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Provinsi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->provinsi }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Luas Tanah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size:13px;line-height:150%;">: {{ $data->luas_tanah }} M<sup>2</sup></span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Luas Bangunan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->luas_bangunan }} M<sup>2</sup></span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Nilai Pengalihan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rp. {{ $data->nilai_transaksi }},-</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Cara Pembayaran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $cara }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Nomor Rekening &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $rekening }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Nama Bank &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-size:13px;line-height:150%;">: {{ $bank }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">N</span><span style="font-size:13px;line-height:150%;">ama&nbsp;</span><span style="font-size:13px;line-height:150%;">Pernilik Rekening &nbsp; &nbsp; &nbsp;: {{ $pemilik }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><strong><span style="font-size:13px;line-height:150%;">ldentitas Penerima Hak</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size:13px;line-height:150%;">: {{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">NIK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $data->ktp_pembeli }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">NPWP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $customer->where('ktp', $data->ktp_pembeli)->pluck('npwp')->implode('[]', '"') }}</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $customer->where('ktp', $data->ktp_pembeli)->pluck('alamat')->implode('[]', '"') }}.</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><strong><span style="font-size:13px;line-height:150%;">Informasi Notaris/PPAT</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size:13px;line-height:150%;">: ABID HUSAIRI, S. H., M. Kn.</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">NPWP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :15.919.687.2-731.000</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">No. Register &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 216/SK-400.HR.03.01/IV/2019</span></p>
<table style="width:524.55pt;margin-left:-21.55pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td rowspan="2" style="width:25.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.9pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">No.</span></p>
            </td>
            <td colspan="4" style="width:254.35pt;border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.9pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Informasi Transaksi Pengalihan</span></p>
            </td>
            <td colspan="3" style="width:244.65pt;border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.9pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Bukti Pembayaran PPh</span></p>
            </td>
        </tr>
        <tr>
            <td style="width:40.25pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Termin</span></p>
            </td>
            <td style="width:60.25pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Tanggal Pembayaran</span></p>
            </td>
            <td style="width:85.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Jumlah Pembayaran</span></p>
            </td>
            <td style="width:68.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">PPh Terutang</span></p>
            </td>
            <td style="width:55.2pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Kode Akun Pajak</span></p>
            </td>
            <td style="width:55.65pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">Kode Jenis Setoran</span></p>
            </td>
            <td style="width:133.8pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.65pt;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">NTPN/Pbk</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 25.55pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">1.</span></p>
            </td>
            <td style="width: 40.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 60.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 68.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 55.2pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 55.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
            <td style="width: 133.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><span style="font-size:13px;line-height:150%;">a</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 25.55pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">2.</span></p>
            </td>
            <td style="width: 40.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 60.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 68.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 55.2pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 55.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 133.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 25.55pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">dst</span></p>
            </td>
            <td style="width: 40.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 60.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 68.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 55.2pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 55.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
            <td style="width: 133.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="font-size:13px;line-height:150%;">&nbsp;</span></p>
            </td>
        </tr>
    </tbody>
</table>
<table style="width:524.55pt;margin-left:-21.55pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 25.55pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 40.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 60.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 68.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 55.2pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 55.65pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;"><br></td>
            <td style="width: 133.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 17pt;vertical-align: top;">
                <p style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><br></p>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
