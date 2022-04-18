<div class="UserApp-container-edit">
    <h1 class="UserApp-container-edit-header header-style">Edytuj ofertę</h1>
    <form>
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
        <input type="text" placeholder="Samochód na sprzedaż" value="Samochód" />
        <label>Aktualne zdjęcie główne oferty: </label>
        <img src="./img/items/car-example.jpg" alt="general-photo">
        <label>Edytuj zdjęcie główne oferty: </label>
        <input type="file" />
        <label>Edytuj opis oferty: </label>
        <textarea class="summernote"></textarea>
        <label>Edytuj zdjęcia oferty: </label>
        <div class="UserApp-container-edit-images">
            <div class="UserApp-container-edit-images-image">
                <div class="UserApp-container-edit-images-image-del">\
                    <i class="fas fa-trash"></i>
                </div>
                <img src="./img/items/car.jpg" />
            </div>
            <div class="UserApp-container-edit-images-image">
                <div class="UserApp-container-edit-images-image-del">\
                    <i class="fas fa-trash"></i>
                </div>
                <img src="./img/items/car.jpg" />
            </div>
            <div class="UserApp-container-edit-images-image">
                <div class="UserApp-container-edit-images-image-del">\
                    <i class="fas fa-trash"></i>
                </div>
                <img src="./img/items/car.jpg" />
            </div>
            <div class="UserApp-container-edit-images-image">
                <div class="UserApp-container-edit-images-image-del">\
                    <i class="fas fa-trash"></i>
                </div>
                <img src="./img/items/car.jpg" />
            </div>
            <div class="UserApp-container-edit-images-image">
                <div class="UserApp-container-edit-images-image-del">\
                    <i class="fas fa-trash"></i>
                </div>
                <img src="./img/items/car.jpg" />
            </div>

        </div>
        <label>Dodaj zdjęcia do oferty: </label>
        <input type="file" multiple />
        <label>Edytuj napis w stopce oferty (opcjonalne): </label>
        <input type="text" placeholder="Dobry stan" />
        <button>Zapisz zmiany</button>
    </form>
</div>