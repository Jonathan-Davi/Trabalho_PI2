# Trabalho_PI2
 
# Plataforma de Rastreamento de Atividades Físicas

Este projeto foi desenvolvido para a disciplina **Programação para Internet 2** do curso de **Sistemas de Informação** da **Universidade Federal de Uberlândia (UFU)**.

A aplicação web é uma **Plataforma de Rastreamento de Atividades Físicas**, permitindo que os usuários registrem, visualizem, editem e excluam atividades físicas, como corridas, caminhadas, treinos, entre outros.

## Perfis de Usuário

- **Admin**: Acesso a todos os registros e controle geral da plataforma.
- **Usuário Comum**: Acesso e controle apenas dos próprios dados.

## Funcionalidades Principais

### Cadastro e Login
- Permite a criação de contas (usuários comuns ou administradores).
- Validação de dados e hashing de senhas para segurança.

### Gerenciamento de Atividades (CRUD)
- **Adicionar**: Usuários podem registrar uma atividade com detalhes (ex.: distância, duração, calorias queimadas).
- **Visualizar**: Exibição de uma lista de atividades registradas.
- **Editar**: Alteração dos registros de atividades existentes.
- **Excluir**: Remoção de registros.

## Requisitos de Segurança

- **Hashing de senhas** (ex.: bcrypt).
- Validação de entradas para prevenir **SQL Injection** e **XSS**.

## Autores

- **Jonathan Aquino**
- **Ludmila Zanardi**
- **Marcelo Augusto**
