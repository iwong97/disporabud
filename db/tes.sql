SELECT LEFT(FROM_UNIXTIME(1558130400),4)
SELECT nama_prasarana, status_pembayaran, LEFT(FROM_UNIXTIME(tgl_pelaksanaan),4) as tahun, count(*) as jumlah FROM peminjaman
JOIN pembayaran using (id_peminjaman)
JOIN prasarana using (id_prasarana)
GROUP BY nama_prasarana, status_pembayaran

SELECT DISTINCT LEFT(FROM_UNIXTIME(tgl_pelaksanaan),4) as tahun FROM peminjaman

SELECT nama_prasarana, diterima, ditolak FROM prasarana
JOIN (SELECT 
id_prasarana,
sum(status_pembayaran = "Ditolak") as ditolak,
sum(status_pembayaran = "Sudah diapprove") as diterima
from pembayaran
join peminjaman using(id_peminjaman) 
WHERE LEFT(FROM_UNIXTIME(tgl_pelaksanaan),4) = "2019"
GROUP BY id_prasarana) d using (id_prasarana)




SELECT nama_prasarana, 
       diterima, 
       ditolak 
FROM   prasarana 
       JOIN (SELECT id_prasarana, 
                    Sum(status_pembayaran = "ditolak")         AS ditolak,
                    Sum(status_pembayaran = "sudah diapprove") AS diterima
             FROM   pembayaran 
                    JOIN peminjaman using(id_peminjaman) 
             WHERE  LEFT(From_unixtime(tgl_pelaksanaan), 4) = "2019" 
             GROUP  BY id_prasarana) d using (id_prasarana) 

ngaran tempat, jumlah diterima, jumlah ditolak

status_pembayaran => {
1. ditolak
2. Sudah diapprove

}

{
	"nama_tempat" : "GKU",
	"jumlah_diterima" : 12,
	"jumlah_ditolak" : 10
}
