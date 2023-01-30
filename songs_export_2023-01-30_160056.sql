CREATE TABLE `songs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `duration` time DEFAULT '03:30:00',
  `released` date DEFAULT '2001-01-01',
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('04:37:00', 1, 'https://i1.ytimg.com/vi/PEJ2vWtrJ-E/hqdefault.jpg', 'Fly me to the moon', '2022-12-25', 'https://www.youtube.com/watch?v=PEJ2vWtrJ-E');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('04:08:00', 2, 'https://i1.ytimg.com/vi/JFKrq4MSzIE/hqdefault.jpg', 'Just the two of us', '2022-12-18', 'https://www.youtube.com/watch?v=JFKrq4MSzIE');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('02:42:00', 3, 'https://i.ytimg.com/vi_webp/NY8zJ9ad9kI/maxresdefault.webp', 'All good in da Hood', '2022-10-18', 'https://www.youtube.com/watch?v=NY8zJ9ad9kI');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('03:00:00', 4, 'https://i.ytimg.com/vi_webp/tjZcXNxkyhE/maxresdefault.webp', 'Rambunctious beet', '2021-01-18', 'https://www.youtube.com/watch?v=tjZcXNxkyhE');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('04:51:00', 5, 'https://i1.ytimg.com/vi/VCQ-KCMjT5s/hqdefault.jpg', 'Baka mitai', '2023-01-02', 'https://www.youtube.com/watch?v=VCQ-KCMjT5s');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('02:51:00', 6, 'https://i.ytimg.com/vi_webp/k85mRPqvMbE/maxresdefault.webp', 'Axel F', '2010-06-04', 'https://www.youtube.com/watch?v=k85mRPqvMbE');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('03:17:00', 7, 'https://i.ytimg.com/vi/n6Hwyq50YWc/maxresdefault.jpg', 'Super idol', '2022-05-03', 'https://www.youtube.com/watch?v=n6Hwyq50YWc');
insert into `songs` (`duration`, `id`, `img`, `name`, `released`, `url`) values ('01:54:00', 8, NULL, 'John Xina Alive', '2022-08-14', 'https://www.youtube.com/watch?v=QiqmbbrNW6k');
