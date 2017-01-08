CREATE TABLE message (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `posted_on` DATETIME NOT NULL,
  `author` CHAR(255),
  `subject` CHAR(255),
  `body` MEDIUMTEXT,
  `thread_id` INT UNSIGNED NOT NULL,
  `parent_id` INT UNSIGNED NOT NULL,
  `level` INT UNSIGNED NOT NULL,
  `thread_pos` INT UNSIGNED NOT NULL
);


CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;