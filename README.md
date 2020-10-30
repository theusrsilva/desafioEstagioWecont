# Desafio | Estagiário Back-End | Wecont

Olá!
 
Seja bem vindo ao teste para a vaga de Estagiário Back-End.

Preparamos um teste que abordará seus conhecimentos em PHP/Laravel. Você será encaixado na vaga de acordo com seu resultado.

A necessidade é desenvolver o projeto "Gerencia de usuários", onde será possível Adicionar, Editar, Excluir Usuário e Adicionar/Excluir números de telefone do mesmo.

# Instruções para entrega

+ Faça um Fork nesse projeto e quando finalizar realize um Pull Request para o mesmo repositório.
+ Crie um README com instruções claras sobre como executar sua obra.
+ Envie um email com o link do seu repositório para rh.wec2019@gmail.com
+ Dúvidas podem ser enviadas para o mesmo email acima.
 
# Projeto

O projeto consiste em um CRUD de usuários e telefone, onde o relacionamento será 1-N(1 para muitos). 

Não será necessário implementar autenticação de usuário.

A projeto deverá ter usuários e telefones. Um usuário poderá ter um ou mais telefones, enquanto um telefone deverá pertencer somente à um usuário.

Usuários possuem:
+ ID
+ Nome (Nome do usuário)
+ Email (Email para autenticação)
+ Senha (Senha para autenticação)
 
Faturas possuem:

+ ID
+ Número (Número de telefone sem caracteres especiais, apenas numeros)
+ ID_User (Id de referencia do usuário)
 
# Rotas

Deverá implementar rotas que contemplem os seguintes objetivos:
+ Possa realizar todas as alterações no usuário (Adicionar um novo, editar, apagar, adicionar um número de telefone e excluir um número de telefone)
 
# Requisitos
+ O projeto deverá ser entregue na linguagem PHP (7 ou superior).
+ Deve-se utilizar Laravel (7 ou superior) como frameworks.
+ Use mysql para persistir os dados.

# Requisitos Opcionais
+ Padronização do código: seguir diretrizes de padrão de projetos. 
+ Pode utilizar Bootstrap ou Vue.js para fazer as telas.

# Critérios de avaliação
+ Fidelidade às funcionalidades solicitadas;     
+ Clareza de nomenclatura do código;
+ Organização do código;
+ Requisitos Opcionais;

# Não conseguiu fazer tudo?

A sua forma de priorizar a entrega também vai ser considerada.

Documente em um arquivo a parte o que você conseguiu e não conseguiu implementar,
descrevendo porque você preferiu priorizar desta maneira.
