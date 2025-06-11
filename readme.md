# WSl
permite rodar distribuiçoes linux dentro do windows

o comando abaixo instala o Ubuntu como distribuição wsl.
```bash
wsl --install -d Ubuntu
```

no powershell na primeira vez que executar o comando  `wsl`, vai ser pedido para escolher um nome de usuário, digitar a senha e digitar a senha novamente.

> Obs: ao digitar a senha **nunca**, será mostrado os caracteres.

# Pós instalação
na pós instalação deve-se atualizar o sistema operacional coms os comandos

```bash
sudo apt update
sudo apt upgrade
```

# Instalar o mariadb como banco de dados 

anstes de instalar qualquer programa, sempre validar se a lista de programas está atualizada

```bash
sudo apt update
```

instalar mariadb:

```bash
sudo apt install mariadb-server
```

## pos instalação do mariadb
roda o comando apos a instalação 
# WSl
permite rodar distribuiçoes linux dentro do windows

o comando abaixo instala o Ubuntu como distribuição wsl.
```bash
wsl --install -d Ubuntu
```

no powershell na primeira vez que executar o comando  `wsl`, vai ser pedido para escolher um nome de usuário, digitar a senha e digitar a senha novamente.

> Obs: ao digitar a senha **nunca**, será mostrado os caracteres.

# Pós instalação
na pós instalação deve-se atualizar o sistema operacional coms os comandos

```bash
sudo apt update
sudo apt upgrade
```

# Instalar o mariadb como banco de dados 

anstes de instalar qualquer programa, sempre validar se a lista de programas está atualizada

```bash
sudo apt install mariadb-server
```

instalar mariadb:

```bash
sudo mysql_secure_installation
```

Enter current password for root (enter for none):    # enter
Switch to unix_socket authentication [Y/n]           # n

Change the root password? [Y/n]                      # y
New password e Re-enter new password                 # digite a senha 123456
Remove anonymous users? [Y/n]                        # y
Disallow root login remotely? [Y/n]                  # n
Remove test database and access to it? [Y/n]         # y
Reload privilege tables now? [Y/n]                   # y

# Como gerenciar o serviço do banco de dados
```bash
sudo systemctl start mariadb  # inicia
sudo systemctl stop mariadb  # para
sudo systemctl restart mariadb  # reinicia
sudo systemctl status mariadb  # verifica status
```

# criação do banco de dados
acessar com:

```bash
mysql -uroot -p
```

### Cria um banco
```sql
create database my_tarefas;
```
### Cria as colunas
```sql
--- Tabela usuário
create table usuario(
    id int not null primary key auto_increment,
    nome varchar (100) not null,
    login varchar(50) not null unique,
    senha varchar(255) not null,
    email varchar(255) not null unique,
    foto_path varchar(255) null,
)

    --- Tabela de tarefas
create table usuario(
    id int not null primary key auto_increment,
    titulo varchar (100) not null,
    descricao text not null unique,
    status tinyint not null,
    user_id int null,
)
```

# API de Usuários e Tarefas

**Aluno:** Sophia da Costa Moreira 
**Data da entrega:** 10/06/2025
**Turma:** 2º Ano

## Endpoints Implementados

### Usuário
- POST /usuario
- PUT /usuario/{id}

### Tarefa
- POST /tarefa
- GET /tarefas
- PUT /tarefa/{id}
- DELETE /tarefa/{id}
- GET /usuario/{id}/tarefas

## Testes

### ✔️ Criar tarefa
![print criar](src/images/Captura%20de%20tela%202025-06-11%20160957.png)

### ✔️ Listar tarefas
![print listar](prints/listar_tarefas.png)

### ✔️ Atualizar tarefa
![print atualizar](prints/atualizar_tarefa.png)

### ✔️ Deletar tarefa
![print deletar](prints/deletar_tarefa.png)

## Instruções

Clone o projeto, instale as dependências com `composer install`, e rode com `php -S localhost:8000 -t public`.


