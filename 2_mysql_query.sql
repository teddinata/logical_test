SELECT 
    a.nama AS 'Nama Mahasiswa',
    a.nim AS 'NIM',
    b.nilai AS 'Nilai',
    c.matakuliah AS 'Mata Kuliah',
FROM 
    mahasiswa a
    LEFT JOIN mhs_nilai b ON a.id = b.mhs_id
    LEFT JOIN matakuliah c ON c.id = b.mk_id
WHERE
    mk_id = mk303
    maximum(nilai)
    
    