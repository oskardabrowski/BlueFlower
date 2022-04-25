<?php
if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    header('Location: ./account.php');
}

$ann = new Announcements();

if (isset($id)) {
    $a = $ann->SelectAnnouncementById($id);
    $images = json_decode($a->ann_images);
}

?>
<div class="UserApp-container-edit">
    <h1 class="UserApp-container-edit-header header-style">Edytuj ofertę</h1>
    <form action="./php/changeAnnouncement.php" method="POST" enctype="multipart/form-data">
        <label>Klasa oferty: </label>
        <input name="id" readonly class="d-none" value="<?php echo $id; ?>" />
        <input name="user_id" readonly class="d-none" value="<?php echo $_SESSION['id']; ?>" />
        <select name="class">
            <option value="other">Inne</oprion>
            <option value="cars">Samochody</oprion>
            <option value="crypto">Kryptowaluty</oprion>
            <option value="soft">Oprogramowanie</oprion>
            <option value="electronic">Elektronika</oprion>
            <option value="meal">Jedzenie</oprion>
            <option value="clothes">Odzież</oprion>
            <option value="agd">AGD</oprion>
        </select>
        <label>Edytuj nazwę oferty: </label>
        <input type="text" name="title" placeholder="Samochód na sprzedaż" value="<?php echo $a->ann_title; ?>" />
        <label>Aktualne zdjęcie główne oferty: </label>
        <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/<?php echo $a->ann_img_general; ?>" alt="general-photo">
        <label>Edytuj zdjęcie główne oferty: </label>
        <input type="file" name="general_img" />
        <label>Edytuj opis oferty: </label>
        <textarea name="desc" class="summernote"><?php echo $a->ann_desc; ?></textarea>
        <label>Edytuj zdjęcia oferty: </label>
        <div class="UserApp-container-edit-images">
            <?php foreach ($images as $i) : ?>
                <div class="UserApp-container-edit-images-image">
                    <div id="<?php echo $id; ?>" pname="<?php echo $i; ?>" class="UserApp-container-edit-images-image-del PhotoAnnouncementDelButton">
                        <i class="fas fa-trash"></i>
                    </div>
                    <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/images/<?php echo $i; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
        <label>Dodaj zdjęcia do oferty: </label>
        <input type="file" name="NewPhotos[]" multiple />
        <label>Edytuj napis w stopce oferty (opcjonalne): </label>
        <input type="text" name="footer" placeholder="Dobry stan" value="<?php echo $a->ann_footer; ?>" />
        <button>Zapisz zmiany</button>
    </form>
</div>