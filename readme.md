# FIESC Feedback Widget – Moodle Plugin

## Descrição

O **FIESC Feedback Widget** é um plugin local para o Moodle que permite coletar avaliações dos usuários sobre o ambiente virtual de aprendizagem, de forma semelhante ao feedback visual do **Hotjar**.

O plugin exibe um **widget flutuante** em todas as páginas do Moodle, onde o usuário pode registrar:
- uma **nota de 1 a 5**
- um **comentário opcional**

Compatível a partir do **Moodle 4.5** (testado em Moodle 4.x).

---

## Funcionalidades

- Widget visual exibido em todas as telas do Moodle
- Envio de feedback sem recarregamento da página (AJAX)
- Persistência dos dados em banco de dados próprio
- Ocultação automática do widget após resposta do usuário
- Visualização contínua para administradores (auditoria e testes)
- Estrutura padrão de plugins do Moodle

---

## Estrutura e Instalação

- Plugin do tipo `local`
- Criação automática das tabelas via `install.xml`
- Estrutura compatível com expansão administrativa (CRUD e relatórios)

### Instalação
1. Copiar a pasta `fiesc` para `/local/`
2. Acessar **Administração do site → Notificações**
3. Concluir a instalação e limpar os caches

---

## Banco de Dados

Tabela: `local_fiesc_feedback`

Campos principais:
- Usuário
- Nota (1 a 5)
- Comentário
- Página avaliada
- Data/hora do envio

---

## Considerações Técnicas

O plugin foi desenvolvido priorizando a experiência do usuário, com carregamento global do widget, comunicação assíncrona e controle de exibição por usuário. A arquitetura permite expansão futura para relatórios administrativos, permissões personalizadas, eventos e tarefas agendadas.

---

## Licença

GNU General Public License (GPL v3)
