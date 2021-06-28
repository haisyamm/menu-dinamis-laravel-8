<html>
    <body>
        <h1>Assalamualaikum, Nama saya {{ $biodata['name'] }}</h1>
        <p> Saya berasal dari kelas {{ $biodata['kelas'] }}</p>
        <p> Hobi saya adalah {{ $biodata['hobi'] }}</p>
        <p> Karena cita - cita saya adalah {{ $biodata['cita'] }}</p>

        <h2>Status</h2>

        <p> Saya sebagai {{ $stat['posisi'] }} di {{ $stat['instansi'] }}</p>
        <p> Sebagai warga negara {{ $stat['wn'] }}</p>
        <p> Dan beragama {{ $stat['agama'] }}</p>

        <h2>Pengalaman</h2>
        <p> Saya pernah bekerja di {{ $exp['pt1'] }} dan {{ $exp['pt2'] }}</p>
        <p> Memiliki sertifikat {{ $exp['sertifikat'] }}</p>
        <p> Serta lulus UJIKOM {{ $exp['ujikom'] }}</p>
    </body>
</html>