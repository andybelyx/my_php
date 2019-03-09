/*Вывести все песни конкретного исполнителя*/
1) select song_name from songs where singer_id = 2;  



/*Вывести все песни всех исполнителей со всеми альбомами*/
2) select song_name,album_name from songs left join albums using(album_id);  



/*Вывести все песни всех исполнителей со всеми альбомами, отсортировать по исполнителям*/
3) select song_name,album_name from songs left join albums using(album_id) order by song_name;  



/*Вывести все песни всех исполнителей со всеми альбомами, отсортировать по альбомам*/
4) select song_name,album_name from songs left join albums using(album_id) order by album_name;  



/*Написать запросы создания плей-листов:
	- по исполнителю, с сортировкой по годам и номерам.*/
5) select song_id,song_name,singer_name,year from songs left join singers using(singer_id) left join albums using(album_id) order by song_id,year;




/*Написать запросы создания плей-листов:
 	- по жанру, с сортировкой от нового к старому.*/
6) select genre_name,song_name,year from songs left join genres using(genre_id) left join albums using(album_id) order by year desc; 
 



/*Запросом подсчитать количество песен у исполнителя по каждому жанру в каждом альбоме*/
7) select count(song_name) from songs left join genres using(genre_id) left join albums using(album_id) where genre_name = 'rap' and album_name = 'Revival';

