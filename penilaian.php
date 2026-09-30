<?php
    $nama_siswa = "Mahansa";
    $kelas = "XII PPLG 3";
    $nilai_tugas= 85;
    $nilai_uts= 80;
    $nilai_uas= 90;

    $nilai_akhir= ($nilai_tugas*0.30) + ($nilai_uts*0.30) + ($nilai_uas*0.40);

    $predikat = '';
    $keterangan = '';

    if($nilai_akhir >= 90){
        $predikat = "A";
    }elseif($nilai_akhir >= 80){
        $predikat = "B";
    }elseif($nilai_akhir >= 75){
        $predikat = "C";
    }elseif($nilai_akhir >= 60){
        $predikat = "D";
    }else{
        $predikat = "E";
    }

    if($nilai_akhir >= 75){
        $status = 'LULUS';
    }else{
        $status = 'TIDAK LULUS';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Siswa</title>
</head>
<body>
    <h1>Hasil Penilaian Siswa</h1>
    <p>Nama: <?php echo $nama_siswa; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <hr>
    <p>Nilai Tugas: <?php echo $nilai_tugas; ?></p>
    <p>Nilai UTS: <?php echo $nilai_uts; ?></p>
    <p>Nilai UAS: <?php echo $nilai_uas; ?></p>
    <hr>
    <p>Nilai Akhir: <?php echo $nilai_akhir; ?></p>
    <p>Predikat: <?php echo $predikat; ?></p>
    <p>Status: <?php echo $status; ?></p>
</body>
</html>
