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
    <form enctype="multipart/form-data">
        <label>Klasa oferty: </label>
        <select>
            <option>Inne</oprion>
            <option>Samochody</oprion>
            <option>Kryptowaluty</oprion>
            <option>Praca</oprion>
            <option>Elektronika</oprion>
            <option>Jedzenie</oprion>
            <option>Odzież</oprion>
            <option>AGD</oprion>
        </select>
        <label>Edytuj nazwę oferty: </label>
        <input type="text" placeholder="Samochód na sprzedaż" value="<?php echo $a->ann_title; ?>" />
        <label>Aktualne zdjęcie główne oferty: </label>
        <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/<?php echo $a->ann_img_general; ?>" alt="general-photo">
        <label>Edytuj zdjęcie główne oferty: </label>
        <input type="file" />
        <label>Edytuj opis oferty: </label>
        <textarea class="summernote"><?php echo $a->ann_desc; ?></textarea>
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
        <input type="text" placeholder="Dobry stan" value="<?php echo $a->ann_footer; ?>" />
        <button>Zapisz zmiany</button>
    </form>
</div>