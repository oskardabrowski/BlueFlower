<div class="UserApp-container-form">
    <h1 class="UserApp-container-form-header header-style">Dodaj nową ofertę</h1>
    <form action="./php/addNewAnnouncement.php" method="POST" enctype="multipart/form-data">
        <label>Typ oferty: </label>
        <select name="type">
            <option value="free">Free - darmowa</oprion>
            <option value="standard">Standard</oprion>
            <option value="premium">Premium</oprion>
        </select>
        <label>Klasa oferty: </label>
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
        <label>Nazwa oferty: </label>
        <input type="text" name="title" placeholder="Samochód na sprzedaż" />
        <label>Zdjęcie główne oferty: </label>
        <input type="file" name="general_image" />
        <label>Opis oferty: </label>
        <textarea class="summernote" name="desc"></textarea>
        <label>Zdjęcia oferty: </label>
        <input type="file" multiple name="images[]" />
        <label>Napis w stopce oferty (opcjonalne): </label>
        <input type="text" placeholder="Dobry stan" name="footer" />
        <button type="submit">Dodaj</button>
    </form>
</div>