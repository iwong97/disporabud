
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
    public function getLaporanPembayaran($tahun)
    {
        // SELECT * FROM peminjaman
        $sql = "SELECT nama_prasarana as y,
       diterima as a,
       ditolak as b
        FROM   prasarana
       LEFT OUTER JOIN (SELECT id_prasarana,
                    Sum(status_pembayaran = \"Ditolak\")         AS ditolak,
                    Sum(status_pembayaran = \"Approve pembayaran\") AS diterima
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
    public function getLaporanPendapatan($tahun){
        $sql = "SELECT prasarana.nama_prasarana as y, pendapatan as a FROM prasarana
LEFT OUTER JOIN (SELECT id_prasarana, nama_prasarana, sum(tarif) as pendapatan FROM `peminjaman`
JOIN pembayaran using (id_peminjaman)
JOIN prasarana using (id_prasarana)
where LEFT(From_unixtime(tgl_pelaksanaan), 4) = '$tahun' and status_pembayaran = 'Approve pembayaran'
GROUP BY id_prasarana) d using (id_prasarana)";

        $data = $this->db->query($sql)->result();
        foreach ($data as $item) {
            $item->a = intval($item->a);
        }
        echo json_encode($data);

    }
    public function getTahunLaporan(){
        return $this->db->query("SELECT DISTINCT LEFT(FROM_UNIXTIME(tgl_pelaksanaan),4) as tahun FROM peminjaman");
    }
}

/* End of file laporan.php */
/* Location: ./application/models/laporan.php */