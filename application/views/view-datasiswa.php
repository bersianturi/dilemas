<html> 

<head>
    <title>Tampil Data Siswa</title> 
</head> 

<body> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Data Siswa 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>nama siswa</th> 
                <th>:</th> 
                <td> 
                    <?= $namasiswa; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>NIS</td> 
                <td>:</td> 
                <td> 
                    <?= $nis; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>kelas</td> 
                <td>:</td> 
                <td> 
                    <?= $kelas; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>tanggal lahir</td> 
                <td>:</td> 
                <td> 
                    <?= $tgllahir; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>tempat lahir</td> 
                <td>:</td> 
                <td> 
                    <?= $tmplahir; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>alamat</td> 
                <td>:</td> 
                <td> 
                    <?= $alamat; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>jenis kelamin</td> 
                <td>:</td> 
                <td> 
                    <?= $jnskelamin; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>agama</td> 
                <td>:</td> 
                <td> 
                    <?= $agama; ?> 
                </td> 
            </tr> 
            <tr>
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('datasiswa'); 
?>">Kembali</a> 
                </td>
            </tr> 
        </table> 
    </center> 
</body> 
</html>