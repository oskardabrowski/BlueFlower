<div class="UserApp-container-form">
    <h1 class="UserApp-container-form-header header-style">Dodaj nową ofertę</h1>
    <form action="./php/addNewAnnouncement.php" method="POST" enctype="multipart/form-data">
        <label>Typ oferty: </label>
        <select name="type">
            <option value="free">Free - darmowa</option>
            <option value="standard">Standard</option>
            <option value="premium">Premium</option>
        </select>
        <label>Klasa oferty: </label>
        <select name="class">
            <option value="other">Inne</option>
            <option value="cars">Samochody</option>
            <option value="crypto">Kryptowaluty</option>
            <option value="soft">Oprogramowanie</option>
            <option value="electronic">Elektronika</option>
            <option value="meal">Jedzenie</option>
            <option value="clothes">Odzież</option>
            <option value="agd">AGD</option>
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
