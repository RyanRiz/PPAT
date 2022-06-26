<?php

namespace App\Imports;

use App\Models\Orders;
use App\Models\Workers;
use App\Models\Customers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row){
            Customers::updateOrCreate(["ktp" => $row['no_ktp_pihak_i']], [
                "nama" => $row['pihak_i'],
                "tempat_lahir" => $row['tempat_lahir_pihak_i'],
                "tanggal_lahir" => date('Y-m-d',strtotime($row['tanggal_lahir_pihak_i'])),
                "umur" => $row['umur_pihak_i'],
                "pekerjaan" => $row['pekerjaan_pihak_i'],
                "alamat" => $row['alamat_pihak_i'],
                "ktp" => $row['no_ktp_pihak_i'],
                "npwp" => $row['npwp_pihak_i'],
                "telepon" => $row['telpon_pihak_i']
            ]);

            Customers::updateOrCreate(["ktp" => $row['no_ktp_pihak_ii']], [
                "nama" => $row['pihak_ii'],
                "tempat_lahir" => $row['tempat_lahir_pihak_ii'],
                "tanggal_lahir" => date('Y-m-d',strtotime($row['tanggal_lahir_pihak_ii'])),
                "umur" => $row['umur_pihak_ii'],
                "pekerjaan" => $row['pekerjaan_pihak_ii'],
                "alamat" => $row['alamat_pihak_ii'],
                "ktp" => $row['no_ktp_pihak_ii'],
                "npwp" => $row['npwp_pihak_ii'],
                "telepon" => $row['telpon_pihak_ii']
            ]);

            Orders::updateOrCreate(["id" => $row['id_permohonan']], [
                "ktp_pembeli" => $row['no_ktp_pihak_i'],
                "ktp_penjual" => $row['no_ktp_pihak_ii'],
                "jenis_permohonan" => $row['jenis_akta'],
                "tanggal_permohonan" =>  date('Y-m-d',strtotime($row['tanggal'])),
                "tanggal_deadline" =>  date('Y-m-d',strtotime($row['estimasi_selesai'])),
                "confirmed" => $row['status'],
                "jenis_sertifikat" => $row['jenis_sertifikat'],
                "sertifikat" => $row['no_sertifikat'],
                "nop" => $row['nop'],
                "nib" => $row['nib'],
                "no_ukur" => $row['no_ukur'],
                "tanggal_ukur" => date('Y-m-d',strtotime($row['tanggal_ukur'])),
                "luas_tanah" => $row['luas_tanah'],
                "luas_bangunan" => $row['luas_bangunan'],
                "lokasi_objek" => $row['alamat_objek'],
                "kelurahan" => $row['desakelurahan'],
                "kecamatan" => $row['kecamatan'],
                "kabupaten" => $row['kabupatenkota'],
                "provinsi" => $row['provinsi'],
                "kav" => $row['nokav'],
                "nilai_transaksi" => (int)str_replace([',', '.', 'Rp', ' '], '', $row['nilai_transaksi']),
                "terbilang" => $row['terbilang'],
                "tanggal_bayar_bphtb" => date('Y-m-d',strtotime($row['tanggal_bayar_bphtb'])),
                "kode_bayar_bphtb" => $row['kode_bayar_bphtb'],
                "jumlah_bayar_bphtb" => (int)str_replace([',', '.', 'Rp', ' '], '', $row['jumlah_bayar_bphtb']),
                "tanggal_bayar_pph" => date('Y-m-d',strtotime($row['tanggal_bayar_pph'])),
                "jumlah_bayar_pph" => (int)str_replace([',', '.', 'Rp', ' '], '', $row['jumlah_bayar_pph']),
                "ntpn" => $row['ntpn'],
                "kuasa" => $row['kuasa'],
                "keterangan" => $row['keterangan'],
            ]);
        }
    }

    public function headingRow(): int
    {
        return 2;
    }
}
