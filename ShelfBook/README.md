## Documentação da API

A API responde em formato JSON. Todas as rotas baseiam-se no prefixo `/api`.

### Books (Livros)
Gerencia o acervo de livros.

- **Listar Livros**
    - `GET /api/book`
    - Resposta: `200 OK` | `{"status": "success", "books": [...]}`

- **Detalhar Livro**
    - `GET /api/book/{id}`
    - Resposta: `200 OK` | `{"status": "success", "book": {...}}`

- **Criar Livro**
    - `POST /api/book`
    - Body:
      ```json
      {
        "title": "String",
        "author": "String",
        "pages": "Integer (opcional)",
        "status": "to_read | reading | finished | default_to_read",
        "rating": "Integer (opcional)",
        "genre_id": "Integer (ID do gênero existente)"
      }
      ```
    - Resposta: `201 Created` | `{"status": "success", "book": {...}}`

- **Atualizar Livro**
    - `PUT /api/book/{id}`
    - Body: (Mesmos campos da criação)
    - Resposta: `200 OK` | `{"status": "success", "book": {...}}`

- **Deletar Livro**
    - `DELETE /api/book/{id}`
    - Resposta: `200 OK` | `{"status": "success"}`

### Genres (Gêneros)
Gerencia as categorias literárias.

- **Listar Gêneros**
    - `GET /api/genre`
    - Resposta: `200 OK` | `[...]` *(Nota: Padronize o envelopamento com o BookController)*

- **Detalhar Gênero**
    - `GET /api/genre/{id}`
    - Resposta: `200 OK` | `{...}`

- **Criar Gênero**
    - `POST /api/genre`
    - Body:
      ```json
      {
        "name": "String",
        "description": "String (opcional)"
      }
      ```
    - Resposta: `201 Created` | `{...}`

- **Atualizar Gênero**
    - `PUT /api/genre/{id}`
    - Body: (Mesmos campos da criação)
    - Resposta: `200 OK` | `{...}`

- **Deletar Gênero**
    - `DELETE /api/genre/{id}`
    - Resposta: `200 OK` | `"Genre successfully deleted"`
