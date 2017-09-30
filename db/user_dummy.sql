INSERT INTO `mathonline`.`user`
(`user_name`,
`password`,
`type_user`,
`id_avatar`,
`name`,
`last_name`,
`sex`,
`year_birthday`,
`email`,
`id_degree`,
`uam_identifier`,
`is_student`,
`is_employed`,
`registration_date`,
`total_score`,
`status`)
VALUES
('Sb-user',
'7h/bw3rybOeDkOEPuDQc0E7pqR0LNJvICXvmBWytEKE4GSvN7IhtzsF1JnVY2r0ojjpwwHBjgFj+KLVSOQPQmQ==',
3,
27,
'Sisbyte User',
'CDMX',
1,
1980,
'sisbyte-user@gmail.com',
42,
101010101,
true,
true,
'2017-01-01 00:00:00',
0,
1);

INSERT INTO `mathonline`.`user`
(`user_name`,
`password`,
`type_user`,
`id_avatar`,
`name`,
`last_name`,
`sex`,
`year_birthday`,
`email`,
`id_degree`,
`uam_identifier`,
`is_student`,
`is_employed`,
`registration_date`,
`total_score`,
`status`)
VALUES
('Sb-admin',
'7h/bw3rybOeDkOEPuDQc0E7pqR0LNJvICXvmBWytEKE4GSvN7IhtzsF1JnVY2r0ojjpwwHBjgFj+KLVSOQPQmQ==',
1,
27,
'Sisbyte Admin',
'CDMX',
1,
1980,
'sisbyte-admin@gmail.com',
42,
101010101,
true,
true,
'2017-01-01 00:00:00',
0,
1);

INSERT INTO `mathonline`.`user`
(`user_name`,
`password`,
`type_user`,
`id_avatar`,
`name`,
`last_name`,
`sex`,
`year_birthday`,
`email`,
`id_degree`,
`uam_identifier`,
`is_student`,
`is_employed`,
`registration_date`,
`total_score`,
`status`)
VALUES
('Sb-ccc',
'7h/bw3rybOeDkOEPuDQc0E7pqR0LNJvICXvmBWytEKE4GSvN7IhtzsF1JnVY2r0ojjpwwHBjgFj+KLVSOQPQmQ==',
2,
27,
'Sisbyte CCC',
'CDMX',
1,
1980,
'sisbyte-ccc@gmail.com',
42,
101010101,
true,
true,
'2017-01-01 00:00:00',
0,
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(1,
2,
1,
'2017-10-01 00:00:00',
15,
'2017-10-01 00:00:00',
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(2,
2,
3,
'2017-10-03 00:00:00',
12,
'2017-01-03 00:00:00',
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(3,
2,
3,
'2017-01-05 00:00:00',
1,
NULL,
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(4,
2,
5,
'2017-10-10 00:00:00',
15,
'2017-10-10 00:00:00',
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(5,
2,
5,
'2017-10-10 00:00:00',
1,
NULL,
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(6,
2,
8,
'2017-10-12 00:00:00',
1,
NULL,
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(7,
2,
13,
'2017-10-15 00:00:00',
20,
'2017-10-16 00:00:00',
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(8,
2,
21,
'2017-10-20 00:00:00',
1,
'2017-10-25 00:00:00',
1);

INSERT INTO `mathonline`.`blog_tutorials`
(`id_blog_tutorials`,
`id_user`,
`id_tutorial`,
`start_date`,
`progress`,
`finish_date`,
`status`)
VALUES
(9,
2,
34,
'2017-11-01 00:00:00',
5,
NULL,
1);