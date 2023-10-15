# db-session
Caratteristiche:
Login e Registrazione: Gli utenti possono registrarsi come navigatori e, successivamente, effettuare l'accesso utilizzando email e password.

Accesso Amministratore: Gli utenti hanno la possibilità di accedere come amministratori inserendo una seconda password durante la fase di login. L'accesso come amministratore offre privilegi avanzati, permettendo una gestione più dettagliata del sistema.

Visualizzazione Utenti: Una volta autenticato come amministratore, è possibile visualizzare un elenco di tutti gli utenti registrati, con dettagli come nome, cognome ed email.

Sicurezza: L'applicazione implementa misure di sicurezza, come l'uso di sessioni e la gestione separata delle credenziali di connessione al database per navigatori e amministratori.

Tecnologie Utilizzate:
Linguaggio: PHP
Database: MySQL

+----+------------+-----------+----------------------------------+----------+
| id | nome       | cognome   | email                            | password |
+----+------------+-----------+----------------------------------+----------+
| 31 | 
| 32 |  
| 35 |    
| 37 | 
+----+
+---------+---------------+
| user_id | root_password |
+---------+---------------+
|      31 |               |
|      35 |               |
+---------+---------------+
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| nome     | varchar(255) | NO   |     | NULL    |                |
| cognome  | varchar(255) | NO   |     | NULL    |                |
| email    | varchar(255) | NO   | UNI | NULL    |                |
| password | varchar(255) | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
+---------------+--------------+------+-----+---------+-------+
| Field         | Type         | Null | Key | Default | Extra |
+---------------+--------------+------+-----+---------+-------+
| user_id       | int(11)      | NO   | PRI | NULL    |       |
| root_password | varchar(255) | NO   |     | NULL    |       |
+---------------+--------------+------+-----+---------+-------+


