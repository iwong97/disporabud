
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Model
{

    public function getLaporanTahunan($tahun)
    {
        // SELECT * FROM peminjaman
        $sql = "SELECT nama_prasarana as y,
       diterima as a,
       ditolak as b
		FROM   prasarana
       LEFT OUTER JOIN (SELECT id_prasarana,
                    Sum(approval_pengajuan = \"Ditolak\")         AS ditolak,
                    Sum(approval_pengajuan = \"Approve pengajuan\") AS diterima
             FROM   pembayaran
                    JOIN peminjaman using(id_peminjaman)
             WHERE  LEFT(From_unixtime(tgl_pelaksanaan), 4) = '$tahun'
             GROUP  BY id_prasarana) d using (id_prasarana) ";
        $data = $this->db->query($sql)->result();
        foreach ($data as $item) {
            $item->a = intval($item->a);
            $item->b = intval($item->b);
        }
        return json_encode($data);
        // echo "<pre>";
        // print_r($data->result());
        // echo "</pre>";
    }
    public function getTahunLaporan(){
        return $this->db->query("SELECT DISTINCT LEFT(FROM_UNIXTIME(tgl_pelaksanaan),4) as tahun FROM peminjaman");
    }
}

/* End of file laporan.php */
/* Location: ./application/models/laporan.php */