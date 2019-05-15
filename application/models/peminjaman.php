<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman extends CI_Model
{

    public function getPeminjaman()
    {
        return $this->db->get('peminjaman');
    }

    public function hapusPeminjaman($pk)
    {
        $this->db->where('id_peminjaman', $pk);
        $this->db->delete('peminjaman');
    }

    public function tambahPeminjaman($data)
    {
        $this->db->insert('peminjaman', $data);
    }

    public function editPeminjaman($pk, $data)
    {
        $this->db->where('id_peminjaman', $pk);
        $this->db->update('peminjaman', $data);
    }

    public function getWhere($pk)
    {
        $this->db->where('id_peminjaman', $pk);
        // $this->db->join('masyarakat', 'masyarakat.no_ktp = peminjaman.no_ktp');
        return $this->db->get('peminjaman');
	}
	public function getWhereColumn($column_name, $pk)
    {
        return $this->db->where($column_name, $pk);
    }

    public function getJoin()
    {
        return $this->db->query(
            'select * from peminjaman pn JOIN prasarana pr
			ON pn.id_prasarana = pr.id_prasarana JOIN pembayaran
			pb ON pn.id_peminjaman = pb.id_peminjaman join masyarakat m
			on pn.no_ktp = m.no_ktp ');
    }

    public function getLaporan()
    {
        return $this->db->query(
            "SELECT * FROM peminjaman
            JOIN prasarana using (id_prasarana)
            JOIN pembayaran using (id_peminjaman)
            ");
    }

    public function getHistory($no_ktp)
    {
        return $this->db->query(
            "SELECT * FROM `peminjaman`
			JOIN pembayaran using (id_peminjaman)
			JOIN prasarana using (id_prasarana)
			where no_ktp = '$no_ktp'");
    }

    public function getBayarSebelum($no_ktp)
    {
        return $this->db->query(
            "select tgl_pelaksanaan from peminjaman pm join
			pembayaran pb on pm.id_peminjaman = pb.id_peminjaman
			where pm.no_ktp = '" . $no_ktp . "'
			and pb.status_pembayaran = 'Belum dibayar'");
    }
    public function getBelumBayar()
    {
        return $this->db->query(
            "select count(*) as jumlah from peminjaman pm join
			pembayaran pb on pm.id_peminjaman = pb.id_peminjaman
			where pb.status_pembayaran = 'Belum dibayar'");
    }

    public function getBelumAcc()
    {
        return $this->db->query(
            "select count(*) as jumlah from peminjaman pm join
			pembayaran pb on pm.id_peminjaman = pb.id_peminjaman
			where pb.approval_pengajuan = 'Belum diapprove'");
    }

    public function getBelumApprove()
    {
        return $this->db->query(
            "select * from pembayaran pb JOIN peminjaman pm
			ON pb.id_peminjaman = pm.id_peminjaman JOIN prasarana pr
			ON pm.id_prasarana = pr.id_prasarana JOIN masyarakat m
			ON pm.no_ktp = m.no_ktp
			where pb.bukti_pembayaran NOT LIKE '-'
			and pb.approval_pengajuan = 'Belum diapprove'"
        );
    }

    public function getSudahApprove()
    {
        return $this->db->query(
            "select * from pembayaran pb JOIN peminjaman pm
			ON pb.id_peminjaman = pm.id_peminjaman JOIN prasarana pr
			ON pm.id_prasarana = pr.id_prasarana JOIN masyarakat m
			ON pm.no_ktp = m.no_ktp
			where pb.bukti_pembayaran NOT LIKE '-'
			and pb.approval_pengajuan = 'Sudah diapprove'"
        );
    }
    public function getHarian(){

        $this->db->group_by("FROM_UNIXTIME(tgl_pelaksanaan,'%e-%m-%Y'), id_prasarana");
        $this->db->join('prasarana', 'prasarana.id_prasarana = peminjaman.id_prasarana');
        $this->db->from('peminjaman');
        $this->db->select("peminjaman.id_prasarana as id_prasarana, FROM_UNIXTIME(tgl_pelaksanaan,'%e %M %Y') as tgl_pelaksanaan, nama_prasarana, count(*) as count, sum(tarif) as hasil");
        return $this->db->get();
    }
    public function getBulanan(){

        $this->db->group_by("FROM_UNIXTIME(tgl_pelaksanaan,'%m-%Y'), id_prasarana");
        $this->db->join('prasarana', 'prasarana.id_prasarana = peminjaman.id_prasarana');
        $this->db->from('peminjaman');
        $this->db->select("peminjaman.id_prasarana as id_prasarana, FROM_UNIXTIME(tgl_pelaksanaan,'%M %Y') as tgl_pelaksanaan, nama_prasarana, count(*) as count, sum(tarif) as hasil");
        return $this->db->get();
    }
    public function getTahunan(){

        $this->db->group_by("FROM_UNIXTIME(tgl_pelaksanaan,'%Y'), id_prasarana");
        $this->db->join('prasarana', 'prasarana.id_prasarana = peminjaman.id_prasarana');
        $this->db->from('peminjaman');
        $this->db->select("peminjaman.id_prasarana as id_prasarana, FROM_UNIXTIME(tgl_pelaksanaan,'%Y') as tgl_pelaksanaan, nama_prasarana, count(*) as count, sum(tarif) as hasil");
        return $this->db->get();
    }
    public function getKetersediaan($id_prasarana)
    {
  //       $this->db->where('approval_pengajuan', $Value);
        // $this->db->where("id_prasarana",$id_prasarana);
  //       $this->db->join('pembayaran', 'peminjaman.id_peminjaman = pembayaran.id_peminjaman', 'left');
        // $this->db->select("id_prasarana, no_ktp, DATE(FROM_UNIXTIME(tgl_pelaksanaan)) as tgl_pelaksanaan, DATE(FROM_UNIXTIME(tgl_selesai))+1 as tgl_selesai");
        // $daftar_jadwal =  $this->db->get("peminjaman")->result();
        $sql = "SELECT id_prasarana, no_ktp, DATE(FROM_UNIXTIME(tgl_pelaksanaan)) as tgl_pelaksanaan, DATE(FROM_UNIXTIME(tgl_selesai))+1 as tgl_selesai  FROM `peminjaman` LEFT JOIN `pembayaran` ON `peminjaman`.`id_peminjaman` = `pembayaran`.`id_peminjaman` WHERE `id_prasarana` = '$id_prasarana' and (status_pembayaran = \"Approve pembayaran\" or UNIX_TIMESTAMP()-UNIX_TIMESTAMP(tgl_pengajuan) < 86400)";

        $daftar_jadwal = $this->db->query($sql)->result();

        $disabledDate = array();
        foreach ($daftar_jadwal as $jadwal) {
            $period = new DatePeriod(
                new DateTime($jadwal->tgl_pelaksanaan),
                new DateInterval('P1D'),
                new DateTime($jadwal->tgl_selesai)
            );
            foreach ($period as $key=>$value){
                $date = $value->format('m/d/Y');       
                array_push($disabledDate,$date);
            }
        }
        return $disabledDate;
    }
    public function getKetersediaanList()
    {
        $sql = "select * from peminjaman pn JOIN prasarana pr
            ON pn.id_prasarana = pr.id_prasarana JOIN pembayaran
            pb ON pn.id_peminjaman = pb.id_peminjaman join masyarakat m
            on pn.no_ktp = m.no_ktp WHERE status_pembayaran = \"Approve pembayaran\" or UNIX_TIMESTAMP()-UNIX_TIMESTAMP(tgl_pengajuan) < 86400";
        return $this->db->query($sql);
    }
	
}
