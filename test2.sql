--
-- Для всего, что сложнее используем Closure table или Nested Sets
-- http://www.slideshare.net/billkarwin/models-for-hierarchical-data
-- 
-- Время на формирование структуры двух таблиц: менее минуты
--
-- Не знаю, с подвохом эта задача или нет, но решаю её в лоб, 
-- т.к. очень мало входных данных для того, чтобы озаботиться 
-- производительностью и чем-либо ещё. Всегда нужно действовать по ситуации ;)
--
-- 16777215 книг, 65535 авторов и длины строки в 255 для ФИО и названий, 
-- думаю, должно хватить для небольшой библиотеки ;)
--

--
-- Структура таблицы `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
 ) ENGINE=MyISAM;

--
-- Структура таблицы `book_author`
--
-- дополнительный индекс `id_author`, нужен для того, чтобы найти все книги, 
-- принадлежащие определённому автору, ибо составной индекс не даёт возможности
-- использовать id_author отдельно
--
-- А вообще, конечно, индексы и их количество исходит сугубо из потребностей
--

CREATE TABLE IF NOT EXISTS `book_author` (
  `id_book` mediumint(8) unsigned NOT NULL,
  `id_author` smallint(5) unsigned NOT NULL,
  PRIMARY KEY  (`id_book`,`id_author`),
  KEY `id_author` (`id_author`)
) ENGINE=MyISAM;