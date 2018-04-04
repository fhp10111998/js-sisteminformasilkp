<?php
include '../koneksi.php';
require('../aset/pdf/fpdf.php');
$tanggal = $_GET['tanggal'];
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',15);
$pdf->Image('../aset/foto/lkp.jpg',1,1,3,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'FIKRI HAIKAL PURBA',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Sidourip',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : lkputamajaya.com email : fhp10111998@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,0.7,'Laporan Data Pembayaran Siswa PKL',0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(4,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(6,0.6,"Laporan Pembayaran pada : ".$_GET['tanggal'],0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'Id', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Tanggal Bayar', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nis Siswa', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Nama Siswa', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jurusan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Keterangan', 1, 1, 'C');
$pdf->SetFont('Arial','',10);


$no=1;
$query=mysqli_query($koneksi,"SELECT id_pembayaran, DATE_FORMAT(tanggal_bayar, '%d-%m-%Y') as tanggal_bayar, jumlah, nis_bayar, keterangan, nama_siswa, jurusan FROM pembayaran INNER JOIN siswa ON nis_bayar = nis WHERE tanggal_bayar = '$tanggal'");
while ($lihat=mysqli_fetch_array($query)) {
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['tanggal_bayar'],1, 0, 'C');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($lihat['jumlah'])." ,-", 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nis_bayar'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['nama_siswa'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $lihat['jurusan'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['keterangan'], 1, 1,'C');

	$no++;

}
$q=mysqli_query($koneksi,"SELECT SUM(jumlah) as jumlah_total FROM pembayaran WHERE tanggal_bayar = '$tanggal'");
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
while($lihat1=mysqli_fetch_array($q)){
	$pdf->Cell(21.5, 0.8, "Total Pendapatan", 1, 0,'C');	
	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($lihat1['jumlah_total'])." ,-", 1, 0,'C');	

		}
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->MultiCell(24.5,0.5,' Beringin, '.$tanggal,0,'R');  
        $pdf->MultiCell(24.8,0.5,'Yang Bertanda Tangan',0,'R');  
        $pdf->SetFont('Times','B',10); 
         $pdf->MultiCell(19.5,0.5,' ',0,'R'); 
        $pdf->MultiCell(19.5,0.5,' ',0,'R'); 
        $pdf->MultiCell(19.5,0.5,' ',0,'R'); 
        $pdf->MultiCell(19.5,0.5,' ',0,'R'); 
        $pdf->SetFont('Times','B',10); 
        $pdf->MultiCell(24.9,0.5,'(Buang Lesmono A.md)',0,'R'); 
        
$pdf->Output("laporan_buku.pdf","I");
?>