insert into client values 
('','CLT0001','DUPONT','Paris'),
('','CLT0002','MARIE','Marseille'),
('','CLT0003','NORBERT','Nantes'),
('','CLT0004','CLAUDE','Clisson');

insert into commande values 
('','1',now()),
('','1','2017/04/20'),
('','1','2017/05/17'),
('','1','2017/06/10');
---Pour DL19
insert into ligne_commande (commande_id,article_id,quantite) values 
(1,2,124),
(1,3,14),
(2,4,24),
(2,5,12);
----Autre
insert into ligne_commande (commande_id,article_id,quantite) values 
(1,2,124),
(1,3,14),
(2,4,24),
(2,5,12),

(4,27,124),
(4,28,14),
(4,29,24),
(4,27,12),
(4,30,17),
(4,28,156);













