create database if not exists `spoton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
use `spoton`;


create table if not exists `users` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `pass` VARCHAR(100) NOT NULL,

    PRIMARY KEY(`id`)
);
go

create table if not exists `trips` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `preco` DOUBLE not null,
    `descricao` VARCHAR(300),
    `lugar`  VARCHAR(100) not null,
    `avaliacao` int check (`avaliacao` >= 0 and `avaliacao` < 6),
    PRIMARY KEY( `id`)
);
go

create table if not exists `comment` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `trip` INT NOT NULL,
    `autor` int not null,
    `texto` VARCHAR(300),
    FOREIGN KEY (`autor`) references users(`id`),
    FOREIGN KEY (`trip`) references trips(`id`)
);
go

create table if not exists `users_trips` (
    `user_id` INT NOT NULL,
    `trip_id` INT NOT NULL,
    `quantidade` INT NOT NULL,
    FOREIGN KEY (`user_id`) references users(`id`),
    FOREIGN KEY (`trip_id`) references trips(`id`)
);
go

-- INSERTS USERS
INSERT INTO `users` (`nome`, `email`, `pass`) VALUES ('admin', 'admin', 'admin');
insert into `users` (`nome`,`email`,`pass`) values ('Lissi Nozzolii', 'lnozzolii0@examiner.com', '4Mhm9xslPBO');
insert into `users` (`nome`,`email`,`pass`) values ('Cherice Burds', 'cburds1@slate.com', '6kFZ96fFBY');
insert into `users` (`nome`,`email`,`pass`) values ('Murvyn Purkins', 'mpurkins2@eventbrite.com', 'bvipO5FUFeq2');
insert into `users` (`nome`,`email`,`pass`) values ('Rianon Spraggs', 'rspraggs3@tripadvisor.com', '7CAqw7V0oOe4');
insert into `users` (`nome`,`email`,`pass`) values ('Karee Greim', 'kgreim4@feedburner.com', 'cuLOVdWG');
insert into `users` (`nome`,`email`,`pass`) values ('Kriste Seefeldt', 'kseefeldt5@nyu.edu', 'zi7cDgVM');
insert into `users` (`nome`,`email`,`pass`) values ('Waylan Slimon', 'wslimon6@sphinn.com', 'ePkufSE');
insert into `users` (`nome`,`email`,`pass`) values ('Ricardo Dermott', 'rdermott7@va.gov', 'WDQ9pgWSWc');
insert into `users` (`nome`,`email`,`pass`) values ('Cal Petriello', 'cpetriello8@irs.gov', '8jdrunVIx7');
insert into `users` (`nome`,`email`,`pass`) values ('Harlan Gaukrodge', 'hgaukrodge9@de.vu', 'rTfQ8TXEd9n');

INSERT INTO `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) VALUES ('Magic Ski', 50.90, 'Melho viagem de sempre', 'Andorra', 4);

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Melia Bali', 120.0, 'Situated on the shores of Nusa Dua this  property is a unique sanctuary of exotic beauty and comfort, making it the perfect hideaway for those seeking a dream vacation.', 'Nusa Dua', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (2,4,"The Best Stay - feels like home"),
  (2,5,"Great hotel and great service"),
  (2,10,"Beautiful hotel and staff"),
  (2,6,"Memorable experience");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('The Tower Hotel', 145.0, 'The Tower Hotel is nestled between the River Thames, St Katharine Docks and alongside the World Heritage Site, the Tower of London.', 'London', 4);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (3,4,"Room comfort great, staff excellent, breakfast cold"),
  (3,9,"Lovely hotel, great location, exceptional value for money."),
  (3,1,"Good value for money, but dated and lack of communication"),
  (3,3,"Poor customer service and not 4 star");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Villa Patrizia', 65.0, 'Villa Patrizia is a property located approximately nine miles south of central Rome, just off of the city’s Grande Raccordo Anulare (GRA) orbital motorway.', 'Rome', 4);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (4,3,"Like your family house abroad"),
  (4,4,"Apartamentos muy limpios y tranquilos. Personal atento y amable. Ideal para descansar."),
  (4,10,"Tanta disponibilità ma molto lavoro da fare"),
  (4,7,"Cortesia e ospitalità");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Hotel Malte', 209.0, 'Located in the 2nd district next to the Stock Exchange, the Louvre and Place des Victoires, Hotel Malta provides a superb location for a memorable stay.', 'Paris', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (5,8,"Exellent hotel at an exellent location"),
  (5,5,"Exceptional hotel staff"),
  (5,1,"Great hotel with great location"),
  (5,9,"Great hotel! can’t wait to be back");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Fortuna Hotel', 48.0, 'Cultivating the latest trend of Asian hospitality, the hotel is designed to the height of modern luxury with meticulous attention to details and dedicated service for discerning business and leisure travelers.', 'Hanoi', 4);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (6,2,"2nd visit after 10 years..still the best"),
  (6,3,"Good hotel, lack of eatery nearby"),
  (6,4,"Good stay with a friendly hotel staff"),
  (6,10,"Beautiful hotel, Subpar Experience");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Nana Princess', 395.0, 'Featuring a private sandy beach area, Nana Princess is located 2.5 km from Hersonissos. The hotel features 2 outdoor swimming pools with sea water, Health Club & Spa centre with indoor heated pool and fully equipped fitness centre.', 'Crete', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (7,10,"Amazing, Amazing, Amazing!!"),
  (7,9,"Nana Princess - a fabulous hotel"),
  (7,8,"A holiday we’ll never forget."),
  (7,5,"Elegance and sophistication");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('The Quarter Silom', 96.0, 'Situated in the heart of Silom & Sathorn, The Quarter Phromphong offers a modern accommodation aimed to meet lifestyles of Urbanites today', 'Bangkok', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (8,3,"Very Good Service and Highly Recommended"),
  (8,5,"A good spot to spend the night in Silom"),
  (8,8,"Favorite spot to stay in Silom"),
  (8,9,"Great service and nice premises");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Seventy Barcelona', 220.0, 'Seventy Barcelona isn’t just a hotel; it’s a home in the heart of one of the world’s favorite cities: Barcelona. It’s an homage to Mediterranean hospitality, set in an ideal location.', 'Barcelona', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (9,4,"Comfortable stay with excellent house staff"),
  (9,5,"stylish, friendly, clean - amazing"),
  (9,8,"Modern Hotel, Friendly Staff, Lovely Neighborhood"),
  (9,6,"Best hotel in Barcelona");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Shangri-La Bosphorus', 375.0, 'In a city that straddles Europe and Asia, discover an enchanting retreat that draws on influences of East and West in Shangri-La Bosphorus, Istanbul.', 'Istanbul', 4);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (10,6,"A wonderful stay..."),
  (10,4,"Pleasant stay"),
  (10,3,"Wonderful in every way"),
  (10,2,"Excellent service!");

insert into `trips` (`nome`, `preco`, `descricao`, `lugar`, `avaliacao`) values ('Moon Palace The Grand', 565.0, 'Located on Cancuns tranquil south shore, this luxury all-inclusive resort offers more than 1,000 accommodations offering double whirlpool tubs, free WIFI, aromatherapy and pillow menus.', 'Cancun', 5);

INSERT INTO `comment` (`trip`,`autor`,`texto`)
VALUES
  (11,2,"Incredible food, presentation, and service"),
  (11,5,"5 star service"),
  (11,7,"Incredible food, great service, and amazing care"),
  (11,9,"Amazing time at La Cantina");


