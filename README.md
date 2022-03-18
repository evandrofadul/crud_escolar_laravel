## Crud Gerenciamento Escolar
Sistema web  desenvolvido com o framework Laravel para concorrer à vaga de estágio.

## Tecnologias Empregadas
- Laravel
- Bootstrap (CDN link)
- Font Awesome (CDN link)
- MySQL
- PHP
- HTML
- CSS

## Funcionamento
Aplicação web com gerenciamento de turmas e alunos, as informações das tabelas são exibidas apenas para o usuário que as criou. Também é possível gerenciar notas e frequência dos alunos.

## Como usar
- Crie um arquivo database com o nome bdcrud
- Adicione as informações de conexão com o banco de dados no arquivo `.env`
- Crie um usuário via SQL como no exemplo a seguir: `User::create(['name' => 'admin', 'email' => 'admin@mail.com', 'password' => Bcrypt('admin')])`
- Realize o login com o usuário criado na página inicial para ter acesso ao sistema de gerenciamento
