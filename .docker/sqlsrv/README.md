
# Passo a Passo para Acessar o SQL Server

Consulte o repositório do Docker para saber mais detalhes: [Microsoft SQL Server - Ubuntu based images](https://hub.docker.com/r/microsoft/mssql-server)

## Passo 1: Utilizar o Azure Data Studio

As credenciais de acesso estão definidas no arquivo .env

###### .env
```ruby
# FOR DATABASES SQLSERVER
MSSQL_DATABASE=cursobdii
MSSQL_USERNAME=SA
MSSQL_SA_PASSWORD=Senha@Forte
MSSQL_TCP_PORT=1433 
```
---
![](connection-Details.png)

---

## Passo 2: Alterar Credenciais (Opcional)
######  Realizar a primeira conexão no banco de dados SQL Server, utilizando o usuário padrão "SA" e a senha configurada no arquivo .env

Para facilitar, os containers do PHP e do SQL Server já foram criados com o utilitário **SQLCMD** para conexão via por meio da linha de comando.

###### Exemplo: Conexão a paritr do container do PHP
```sh
# Acessar o container do PHP
docker exec -it example_app  bash

# Opção 2: Acessar o container do SQL Server
docker exec -it example_sqlsrv  bash

#Conectar no banco de dados SQL Server
/opt/mssql-tools18/bin/sqlcmd -S sqlsrv,1433 -U SA  -P "Senha@Forte" -C 

# Criar uma base de dados
CREATE DATABASE cursobdii
go
quit;

# (Opcional)
# Alterar O usuário SA para Admin
ALTER LOGIN SA  WITH NAME = admin
go

# Alterar a senha
ALTER LOGIN admin WITH PASSWORD = 'novaSenha@123'
go
quit

# Validar Alterações
/opt/mssql-tools18/bin/sqlcmd -S sqlsrv,1433 -U Admin  -P "novaSenha@123" -C
```
