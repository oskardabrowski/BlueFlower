<div class="UserApp-container-form">
    <h1 class="UserApp-container-form-header header-style">Dodaj nową ofertę</h1>
    <form>
        <label>Typ oferty: </label>
        <select>
            <option>Free - darmowa</oprion>
            <option>Standard</oprion>
            <option>Premium</oprion>
        </select>
        <label>Klasa oferty: </label>
        <select>
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
        <input type="text" placeholder="Samochód na sprzedaż" />
        <label>Zdjęcie główne oferty: </label>
        <input type="file" />
        <label>Opis oferty: </label>
        <textarea class="summernote"></textarea>
        <label>Zdjęcia oferty: </label>
        <input type="file" multiple />
        <label>Napis w stopce oferty (opcjonalne): </label>
        <input type="text" placeholder="Dobry stan" />
        <button>Dodaj</button>
    </form>
</div>