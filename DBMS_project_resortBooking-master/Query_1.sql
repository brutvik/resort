/* All cutomers from Bangalore*/
SELECT c.name 
FROM customer as c
WHERE c.address LIKE '%Bangalore';

/* All Resorts that have 3-Star rating*/
SELECT r.r_name 
FROM resort as r
WHERE r.star_rating = '3';