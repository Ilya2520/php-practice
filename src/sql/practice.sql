/*
 # №1
 */
select model, speed, hd from PC
where price < 500;

/*
 # №2
 */
select distinct maker as Maker from Product
where Product.type = 'Printer';

/*
# №3
*/
Select model,ram,screen from Laptop
where price > 1000;

/*
# №4
*/
select * from Printer
where color='y';
/*
# №5
*/
select model, speed, hd from PC
where (cd='12x' or cd = '24x') and price<600

/*
# №6
*/
Select distinct maker, speed from Product
                                      join Laptop on Product.model = Laptop.model
where Laptop.hd>=10;

/*
# №7
*/
select distinct product.model, pc.price
from Product join pc on product.model = pc.model where maker = 'B'
union
select distinct product.model, laptop.price
from product join laptop on product.model=laptop.model where maker='B'
union
select distinct product.model, printer.price
from product join printer on product.model=printer.model where maker='B'


/*
# №8
*/
SELECT DISTINCT maker
FROM product
WHERE type = 'pc'
EXCEPT
SELECT DISTINCT product.maker
FROM product
Where type = 'laptop';


/*
# №9
*/
Select distinct maker from Product
                               join PC on product.model = pc.model
where speed >=450;


/*
# №10
*/
Select model, price from Printer
where price = (select max(price) from Printer);


/*
# №11
*/
Select avg(speed) from PC;


/*
# №12
*/
Select avg(speed) from Laptop
where price > 1000;


/*
# №13
*/
Select avg(speed) from Product
                           join pc on product.model = pc.model
where maker = 'A';


/*
# №14
*/
select Ships.class, name, country from Ships
                                           join classes on ships.class = classes.class
where numGuns>=10;


/*
# №15
*/
Select hd from PC
group by hd
having count(hd)>=2;


/*
# №16
*/
Select distinct pc1.model, pc2.model,pc1.speed, pc1.ram from pc pc1, pc pc2
where pc1.ram =pc2.ram  and pc1.speed = pc2.speed and pc1.model > pc2.model
;

/*
# №17
*/
Select distinct type, pr.model,speed from product pr
                                              join laptop lp on lp.model = pr.model
where speed < (select min(speed) from pc)
;


/*
# №18
*/
Select distinct maker, price from product pro
                                      join printer pri on pri.model = pro.model
where price = (select min(price) from printer where color='y'
) and color='y'


/*
# №19
*/
select maker, avg(screen) from product pro
                                   join laptop lp on pro.model = lp.model
group by maker;

/*
# №20
*/
select maker,count(model) from product pro
where type='pc'
group by maker
having count(model)>=3;


/*
# №21
*/
select maker, max(price) from product
                                  join pc on pc.model = product.model
group by maker;

/*
# №22
*/
Select speed, avg(price) from pc
where speed>600
group by speed;



/*
# №23
*/
Select Maker from Product
                      join pc on pc.model = product.model
where speed>=750
intersect
Select Maker from Product
                      join laptop on laptop.model = product.model
where speed>=750;



/*
# №24
*/
select model from(Select model,price from pc
                  union
                  Select model,price from laptop
                  union
                  Select model,price from printer
                 ) con1
where price = (
    select MAX(price) From (select price from pc
                            union
                            Select price from laptop
                            union
                            Select price from printer) con2
)
;
/*
# №25
*/
Select distinct maker from product pr
                               join pc on pr.model = pc.model
where ram = (select min(ram) from pc) and speed = (Select max(speed) from product pr
                                                                              join pc on pr.model = pc.model
                                                   where ram = (select min(ram) from pc)) and maker in (select distinct maker from product where type='printer')
;
/*
# №26
*/
select avg(s.price) from
    (select price from product
                           join pc on product.model = pc.model
     where  product.maker='A'
     union all
     select price from product
                           join laptop on product.model = laptop.model
     where  product.maker='A') as s
;
/*
# №27
*/
Select maker, avg(hd) from product
                               join pc on product.model = pc.model
where maker in (select distinct maker from product where type = 'printer')
group by maker;

/*
# №28
*/
select count(ct) from(Select maker, count(model)as ct from product
                      group by maker)cr
where ct = 1;

/*
# №29
*/

/*
# №30
*/

/*
# №31
*/
select class, country from classes
where bore>=16;

/*
# №32
*/

/*
# №33
*/
Select ship from Outcomes
where result = 'sunk' and battle = 'North Atlantic';


/*
# №34
*/
Select name from ships
                     join classes on ships.class = classes.class
where launched >= 1922 and displacement >35000 and type='bb'


/*
# №35
*/
select model,type from product
WHERE model NOT LIKE '%[^0-9]%' OR model NOT LIKE '%[^a-z]%'
;
/*
# №36
*/



/*
# №37
*/
select c.class from classes c
                        left join (select class, name from ships
                                   union
                                   select ship, ship from outcomes) AS s ON s.class = c.class
group by c.class
having count(s.name) = 1;

/*
# №38
*/

select distinct country from classes
where type = 'bb' and country in( select country from classes
                                  where type = 'bc')
;
/*
# №39
*/

/*
# №40
*/
select maker, max(type)
from product
group by maker
having count(distinct type) = 1 and count(model) > 1
;