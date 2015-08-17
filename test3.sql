-- +----+--------+------------+-------+
-- | id | type   | date       | value |
-- +----+--------+------------+-------+
-- | 1  | PHOTO  | 2015-02-02 | 1240  |
-- +----+--------+------------+-------+
-- | 2  | IMAGE  | 2015-02-02 | 5609  |
-- +----+--------+------------+-------+
-- ...
-- +----+--------+------------+-------+
-- | 50 | PHOTO  | 2015-02-01 | 1190  |
-- +----+--------+------------+-------+
-- | 51 | REVIEW | 2015-02-02 | 3600  |
-- +----+--------+------------+-------+

-- +--------+------+
-- | PHOTO  | 1240 |
-- +--------+------+
-- | IMAGE  | 5609 |
-- +--------+------+
-- | REVIEW | 3600 |
-- +--------+------+

-- 
-- Время на решение: около 5 минут
--


SELECT `t1`.`type`, `t1`.`value`
FROM (
      SELECT `type`, MAX(`date`) AS `max_date`
      FROM `table`
      GROUP BY `type`
) `t2`
INNER JOIN `table` `t1`
ON `t1`.`type` = `t2`.`type` AND `t1`.`date` = `t2`.`max_date`;