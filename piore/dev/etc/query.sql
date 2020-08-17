CREATE TABLE `n_select` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `des` varchar(255),
  `cate` varchar(255)
);

CREATE TABLE `n_check` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `n_paid` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `n_method` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `n_list` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `des` text,
  `conditiona` int,
  `conditionb` int
);

CREATE TABLE `n_symptom` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `ename` varchar(255) UNIQUE,
  `name` varchar(255),
  `kind` varchar(255),
  `ekind` varchar(255),
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_consulting` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `des` text,
  `service_id` int,
  `con_id` int,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `kind` varchar(255),
  `period` tinyint UNSIGNED,
  `price` int,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_subproduct` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `image` varchar(255) DEFAULT 'blank.jpg',
  `kind` varchar(255),
  `price` int,
  `description` text,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_ordered` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `service_id` int,
  `subproduct` int,
  `quantity` tinyint,
  `method` tinyint,
  `paid` tinyint,
  `date` timestamp,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_chartIn` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `service_id` int,
  `symptoms` varchar(255),
  `feedTimeLast` datetime,
  `engorge` tinyint,
  `feedQty` int,
  `feedStoreQty` int,
  `feedExperiance` tinyint,
  `feedTimeAvailable` varchar(255),
  `incubationTest` text,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE `n_room` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `num` smallint,
  `service_id` int DEFAULT 0,
  `status_id` int DEFAULT 23,
  `note` text
);

CREATE TABLE `n_bed` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `service_id` int,
  `note` text
);

CREATE TABLE `n_dailyst` (
	`id` int PRIMARY KEY AUTO_INCREMENT,
	`service_id` int,
  `cord` tinyint DEFAULT 2,
	`test` tinyint DEFAULT 2,
	`weight` float,
	`weightvar` float,
	`tempd` float,
	`tempe` float,
	`tempn` float,
	`pulsed` tinyint UNSIGNED,
	`pulsee` tinyint UNSIGNED,
	`pulsen` tinyint UNSIGNED,
	`respd` tinyint UNSIGNED,
	`respe` tinyint UNSIGNED,
	`respn` tinyint UNSIGNED,
	`created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_dailynd` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `service_id` int,
  `emp_id` int,
  `feeded` tinyint UNSIGNED,
  `breastfeed` tinyint UNSIGNED,
  `feedkind` varchar(255),
  `feed` tinyint UNSIGNED,
  `omit` tinyint UNSIGNED,
  `pee` tinyint UNSIGNED,
  `feces` varchar(255),
  `remarks` varchar(255),
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_service` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `emp_id` int,
  `mom_id` int,
  `dayin` date,
  `dayout` date,
  `product` int,
  `amount` int DEFAULT 0,
  `book_dep` int DEFAULT 0,
  `book_date` date,
  `book_method` tinyint UNSIGNED DEFAULT 1,
  `ext_date` date,
  `ext_method` tinyint UNSIGNED DEFAULT 1,
  `consult_date` date,
  `checked` tinyint UNSIGNED DEFAULT 20,
  `progress` tinyint UNSIGNED DEFAULT 8,
  `bloodTypeM` tinyint UNSIGNED DEFAULT 26,
  `bloodTypeF` tinyint UNSIGNED DEFAULT 26,
  `bloodTypeB` tinyint UNSIGNED DEFAULT 26,
  `roomno` varchar(255),
  `name` varchar(255),
  `bbirth` date,
  `sexual` tinyint UNSIGNED DEFAULT 14,
  `hospital` varchar(255),
  `birthform` tinyint UNSIGNED DEFAULT 1,
  `gestation` tinyint UNSIGNED DEFAULT 40,
  `weightbirth` float,
  `weightin` float,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP,
  `note` text
);

CREATE TABLE `n_mom` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `image` varchar(255) DEFAULT 'blank.jpg',
  `name` varchar(255),
  `birth` date,
  `phone` varchar(255),
  `email` varchar(255),
  `address` varchar(255),
  `img` varchar(255),
  `note` text,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `image` varchar(255) DEFAULT 'blank.jpg',
  `uname` varchar(255) UNIQUE,
  `pass` varchar(255),
  `name` varchar(255),
  `birth` date,
  `joined` date,
  `career` varchar(255),
  `phone` varchar(255),
  `email` varchar(255),
  `address` varchar(255),
  `class` tinyint UNSIGNED,
  `status` tinyint DEFAULT 35,
  `note` text,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `n_record` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `room_number` smallint,
  `name` varchar(255),
  `bbirth` char(10),
  `dayin` char(10),
  `gender` char(5),
  `count` tinyint,
  `wbirth` float,
  `birthform` char(10),
  `obgy` varchar(255),
  `w1` float,
  `w2` float,
  `w3` float,
  `w4` float,
  `w5` float,
  `w6` float,
  `w7` float,
  `w8` float,
  `w9` float,
  `w10` float,
  `w11` float,
  `w12` float,
  `w13` float,
  `w14` float
);
