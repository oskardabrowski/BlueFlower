<?php
$items = new Announcements();
$user = new User();
$announcements = $items->SelectAllAnnouncements();
?>

<article class="items">
    <div class="items-headerdiv">
        <h1 class="items-header header-style">Najnowsze ogłoszenia</h1>
    </div>
    <div class="items-filter">
        <form class="items-filter-form">
            <label class="items-filter-form-label" for="province">Nazwa: </label>
            <input type="text" placeholder="np. Motoryzacja" id="name" class="items-filter-form-selection province-selection" />
            <label class="items-filter-form-label" for="province">Obszar: </label>
            <select id="province" class="items-filter-form-selection province-selection">
                <option>Polska</option>
                <option>Kujawsko-Pomorskie</option>
                <option>Pomorskie</option>
                <option>Zachodniopomorskie</option>
                <option>Warmińsko-Mazurskie</option>
                <option>Wielkopolskie</option>
                <option>Lubuskie</option>
                <option>Białowieskie</option>
                <option>Mazowieckie</option>
                <option>Lubelskie</option>
                <option>Podkarpackie</option>
                <option>Małopolskie</option>
                <option>Łódzkie</option>
                <option>Świętokrzyskie</option>
                <option>Opolskie</option>
                <option>Śląskie</option>
                <option>Dolnośląskie</option>
            </select>
            <label class="items-filter-form-label" for="topic">Kategoria: </label>
            <select id="topic" class="items-filter-form-selection topic-selection">
                <option>Wszystkie</option>
                <option>Inne</option>
                <option>Samochody</option>
                <option>Kryptowaluty</option>
                <option>Oprogramowanie</option>
                <option>Elektronika</option>
                <option>Jedzenie</option>
                <option>Odzież</option>
                <option>AGD</option>
            </select>
        </form>
    </div>
    <div class="items-container">
        <!--Card for rest offer-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/book.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title other-background other-path">
                        <h2>Books for sale</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer other-background">$12/one</div>
                </div>
                <div class="items-container-item-rotate-back other-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alexander.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alexander</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for cars and cards-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/car.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title cars-background cars-path">
                        <h2>Car for sale</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer cars-background">In good stage</div>
                </div>
                <div class="items-container-item-rotate-back cars-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Julian.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Julian</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for Crypto-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/crypto.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title crypto-background crypto-path">
                        <h2>I'll buy Bitcoins!</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer crypto-background">Contct me</div>
                </div>
                <div class="items-container-item-rotate-back crypto-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Tedy.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Tedy</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for jobs-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/Software.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title soft-background soft-path">
                        <h2>I'll hire PHP Developer</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer soft-background">$25/hour</div>
                </div>
                <div class="items-container-item-rotate-back soft-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alex.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alex</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for electronics-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/laptop.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title electronic-background electronic-path">
                        <h2>Mac book for sale</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer electronic-background">$2500</div>
                </div>
                <div class="items-container-item-rotate-back electronic-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alex.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alex</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for meal-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/cupcakes.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title meal-background meal-path">
                        <h2>Buy cupcakes!</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer meal-background">$2/one</div>
                </div>
                <div class="items-container-item-rotate-back meal-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alex.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alex</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for clothes-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/clothes.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title clothes-background clothes-path">
                        <h2>Beautiful suits</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer clothes-background">Individual price</div>
                </div>
                <div class="items-container-item-rotate-back clothes-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alex.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alex</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>
        <!--Card for AGD-->
        <a href="#" class="items-container-item">
            <div class="items-container-item-rotate">
                <div class="items-container-item-rotate-front">
                    <div class="items-container-item-rotate-front-image">
                        <img src="./img/items/mixer.jpg" alt="book" />
                    </div>
                    <div class="items-container-item-rotate-front-title agd-background agd-path">
                        <h2>AGD Renovation</h2>
                    </div>
                    <div class="items-container-item-rotate-front-desc">
                        <p>
                            Rub face on owner run as fast as i can into another room for no reason and be a nyan
                            cat, feel great about
                            it, be
                            annoying 24/7 poop rainbows in litter box all day or walk on keyboard meow go back to
                            sleep owner brings
                            food and water
                            tries to pet on head, so scratch get sprayed by water because bad cat or sleeps on my
                            head. All of a sudden
                            cat goes
                            crazy eat prawns daintily with a claw then
                        </p>
                    </div>
                    <div class="items-container-item-rotate-front-footer agd-background"></div>
                </div>
                <div class="items-container-item-rotate-back agd-background">
                    <div class="items-container-item-rotate-back-photo">
                        <div class="items-container-item-rotate-back-photo-container">
                            <img src="./img/users/Alex.jpg" alt="user-image" />
                        </div>
                        <span class="items-container-item-rotate-back-photo-username">Alex</span>
                    </div>
                    <div class="items-container-item-rotate-back-content">
                        Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace
                        holystone mizzenmast quarter crow's
                        nest nipperkin grog yardarm hempen halter furl.
                    </div>
                    <div class="items-container-item-rotate-back-contact">
                        <span class="items-container-item-rotate-back-contact-header">Contact</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i>
                            555 555 555</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i>alexander@mail.com</span>
                        <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i>11-223, Roma Street, Melbourne Australia</span>
                    </div>
                </div>
            </div>
        </a>

        <?php foreach ($announcements as $a) : ?>
            <?php
            $user_data;
            $user_contact;

            if ($a->ann_user) {
                $ann_user = $user->SelectUserByUniq($a->ann_user);
                $user_data = $ann_user[0];
            }
            $user_contact = json_decode($user_data->user_contact);
            ?>
            <a href="#" class="items-container-item">
                <div class="items-container-item-rotate">
                    <div class="items-container-item-rotate-front">
                        <div class="items-container-item-rotate-front-image">
                            <img src="./img/items/<?php echo $a->ann_img_general; ?>" alt="book" />
                        </div>
                        <div class="items-container-item-rotate-front-title <?php echo $a->ann_type; ?>-background <?php echo $a->ann_type; ?>-path">
                            <h2><?php echo $a->ann_title; ?></h2>
                        </div>
                        <div class="items-container-item-rotate-front-desc">
                            <p>
                                <?php echo $a->ann_desc; ?>
                            </p>
                        </div>
                        <div class="items-container-item-rotate-front-footer <?php echo $a->ann_type; ?>-background"><?php echo $a->ann_footer; ?></div>
                    </div>
                    <div class="items-container-item-rotate-back <?php echo $a->ann_type; ?>-background">
                        <div class="items-container-item-rotate-back-photo">
                            <div class="items-container-item-rotate-back-photo-container">
                                <?php if ($user_data->user_photo !== '') : ?>
                                    <img src="./img/users/Alex.jpg" alt="user-img" />
                                <?php else : ?>
                                    <img src="./img/default.jpg" alt="user-img" />
                                <?php endif; ?>
                            </div>
                            <span class="items-container-item-rotate-back-photo-username"><?php echo $user_data->user_name; ?></span>
                        </div>
                        <div class="items-container-item-rotate-back-content">
                            <?php echo $user_data->user_desc; ?>
                        </div>
                        <div class="items-container-item-rotate-back-contact">
                            <span class="items-container-item-rotate-back-contact-header">Contact</span>
                            <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></span>
                            <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i><?php echo $user_data->user_email; ?></span>
                            <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></span>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</article>