<?php
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passo a Passo para Acessar o SQL Server</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1, h2 {
            color: #007BFF;
        }
        pre {
            background: #f8f9fa;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            color: #d63384;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Passo a Passo para Acessar o SQL Server</h1>
    <p>Consulte o repositório do Docker para saber mais detalhes: 
        <a href="https://hub.docker.com/r/microsoft/mssql-server" target="_blank">Microsoft SQL Server - Ubuntu based images</a>
    </p>
    <h2>Passo 1: Utilizar o Azure Data Studio</h2>
    <p>As credenciais de acesso estão definidas no arquivo <code>.env</code></p>
    <pre>
# FOR DATABASES SQLSERVER
MSSQL_DATABASE=cursobdii
MSSQL_USERNAME=SA
MSSQL_SA_PASSWORD=Senha@Forte
MSSQL_TCP_PORT=1433
    </pre>
    <hr>
    <img src="connection-Details.png" alt="Connection Details">
    <hr>
    <h2>Passo 2: Alterar Credenciais (Opcional)</h2>
    <p>Realizar a primeira conexão no banco de dados SQL Server, utilizando o usuário padrão <code>SA</code> e a senha configurada no arquivo <code>.env</code></p>
    <p>Para facilitar, os containers do PHP e do SQL Server já foram criados com o utilitário <strong>SQLCMD</strong> para conexão via linha de comando.</p>
    <h3>Exemplo: Conexão a partir do container do PHP</h3>
    <pre>
# Acessar o container do PHP
docker exec -it example_app bash

# Opção 2: Acessar o container do SQL Server
docker exec -it example_sqlsrv bash

# Conectar no banco de dados SQL Server
/opt/mssql-tools18/bin/sqlcmd -S sqlsrv,1433 -U SA -P "Senha@Forte" -C 

# Criar uma base de dados
CREATE DATABASE cursobdii
go
quit;

# (Opcional)
# Alterar o usuário SA para Admin
ALTER LOGIN SA WITH NAME = admin
go

# Alterar a senha
ALTER LOGIN admin WITH PASSWORD = "novaSenha@123"
go
quit

# Validar Alterações
/opt/mssql-tools18/bin/sqlcmd -S sqlsrv,1433 -U Admin -P "novaSenha@123" -C
    </pre>
</body>
</html>';