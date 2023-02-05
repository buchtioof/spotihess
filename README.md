# spotihess
> The most goofiest bangers online

Le code est catastrophique et marche à 25% (la moitié de chaque élément est nickel l'autre est cassée)
Placer les fichiers dans le dossier htdocs (xampp) et coller le code SQL en dessous dans une DB appelée "spotihess" (important)

Chacklist:

- [x] Make readme
- [ ] Make index page
- [x] Favourite button
- [x] Search function (ready but unused bc useless for project)
- [ ] Cookie save lists
- [x] Make liked page
- [x] Insert sql data
- [ ] Add player with iframe Youtube
- [ ] Style index
- [ ] Style liked
- [ ] Clean database with all songs and data
- [ ] Update database in readme (final task)
- [ ] Clean git for copy-paste in xampp (final task)

last sql database export

```
CREATE TABLE `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `duration` time DEFAULT '03:30:00',
  `released` date DEFAULT '2001-01-01',
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Anuc Atittawan', '04:37:00', 1, 'https://i1.ytimg.com/vi/PEJ2vWtrJ-E/hqdefault.jpg', 'Fly me to the moon', '2001-01-01', 1, 'https://www.youtube.com/embed/PEJ2vWtrJ-E?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Anuc Atittawan', '04:08:00', 2, 'https://i1.ytimg.com/vi/JFKrq4MSzIE/hqdefault.jpg', 'Just the two of us', '2022-12-18', 0, 'https://www.youtube.com/embed/JFKrq4MSzIE?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Dadood', '02:42:00', 3, 'https://i.ytimg.com/vi_webp/NY8zJ9ad9kI/maxresdefault.webp', 'All good in da Hood', '2022-10-18', 0, 'https://www.youtube.com/embed/NY8zJ9ad9kI?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Dadood', '03:00:00', 4, 'https://i.ytimg.com/vi_webp/tjZcXNxkyhE/maxresdefault.webp', 'Rambunctious beet', '2021-01-18', 1, 'https://www.youtube.com/embed/tjZcXNxkyhE?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Anuc Atittawan', '04:51:00', 5, 'https://i1.ytimg.com/vi/VCQ-KCMjT5s/hqdefault.jpg', 'Baka mitai', '2023-01-02', 1, 'https://www.youtube.com/embed/VCQ-KCMjT5s?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('Crazy Frog', '02:51:00', 6, 'https://i.ytimg.com/vi_webp/k85mRPqvMbE/maxresdefault.webp', 'Axel F', '2010-06-04', 0, 'https://www.youtube.com/embed/k85mRPqvMbE?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('jsp', '03:17:00', 7, 'https://i.ytimg.com/vi/n6Hwyq50YWc/maxresdefault.jpg', 'Super idol', '2022-05-03', 0, 'https://www.youtube.com/embed/n6Hwyq50YWc?autoplay=1');
insert into `songs` (`artist`, `duration`, `id`, `img`, `name`, `released`, `status`, `url`) values ('jsp nonplu', '01:54:00', 8, 'https://i.ytimg.com/vi/QiqmbbrNW6k/maxresdefault.jpg', 'John Xina Alive', '2022-08-14', 0, 'https://www.youtube.com/embed/QiqmbbrNW6k?autoplay=1');

```
  
