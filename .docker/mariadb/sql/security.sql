
-- MySQL dump - Security adjustments
-- ------------------------------------------------------


-- Criação dos usuários
CREATE USER IF NOT EXISTS 'admin'@'%' IDENTIFIED BY 'web';
CREATE USER IF NOT EXISTS 'admin'@'localhost' IDENTIFIED BY 'web';

CREATE USER IF NOT EXISTS 'convidado'@'%' IDENTIFIED BY 'web';
CREATE USER IF NOT EXISTS 'convidado'@'localhost' IDENTIFIED BY 'web';

-- Admin com privilégios totais
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;

-- Convidado com apenas leitura no banco criado via env (DB_DATABASE)
GRANT SELECT ON `${DB_DATABASE}`.* TO 'convidado'@'%';
GRANT SELECT ON `${DB_DATABASE}`.* TO 'convidado'@'localhost';

-- Revogar privilégios do root e bloquear conta (se existir)
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'root'@'%';
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'root'@'localhost';

-- Bloquear root (versões recentes do MariaDB suportam isso)
ALTER USER 'root'@'%' ACCOUNT LOCK;
ALTER USER 'root'@'localhost' ACCOUNT LOCK;

FLUSH PRIVILEGES;

