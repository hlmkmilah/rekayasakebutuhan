Aturan Developer
=================

# Halaman baru
Setiap halaman baru wajib menambahkan template sebagai berikut :

<!DOCTYPE html>
<html>
    <?php require_once './header.php'; ?>
    <?php require_once './sidebar.php'; ?>
    <?php require_once [PATH HALAMAN KONTEN]?>
    <?php require_once './footer.php' ;?>
</html>

# Branching
Setiap fitur wajib menggunakan branch sendiri dan dilakukan pull request sebelum merge

# Issue
Semua fitur diberikan di issue