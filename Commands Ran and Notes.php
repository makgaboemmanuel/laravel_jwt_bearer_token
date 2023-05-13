 <?php

#composer create-project laravel/laravel="8.0" laravel_jwt_auth

# composer require tymon/jwt-auth:dev-develop --prefer-source

# php artisan vendor:publish
# af:ter this command, please press 9 and enter

# php artisan jwt:secret

/*

PS C:\xampp\htdocs\projphp\laravel_jwt_auth> php artisan jwt:secret

jwt-auth secret [OcwTv9OjccjD5OfvFmorMQenH5mJU95vE7KxFxPdOSqavcuKbZ99qXB9CgPUdo4j] set successfully.

*/

# php artisan make:controller AuthController

# php artisan make:controller TodoController

# please run the command to create a model: php artisan make:model Todo -mcr

# time: : 25:02 of 59:09

# php artisan migrate --path=/database/migrations/2023_05_11_205901_create_todos_table.php

# php artisan make:factory TodoFactory

# php artisan tinker

# App\Models\User::factory()->count(10)->create();

/*

Illuminate\Database\Eloquent\Collection {#6168
    all: [
      App\Models\User {#6174
        name: "Elsa Blanda",
        email: "cathy.kuphal@example.net",
        email_verified_at: "2023-05-13 17:33:52",
        #password: "$2y$10$8Ff2gU/6m4KStyuS.zIcfubKuaMP0QWy8/xICwVukWLBLGJnrk5bS",
        #remember_token: "jJHtLiKqYQ",
        updated_at: "2023-05-13 17:33:53",
        created_at: "2023-05-13 17:33:53",
        id: 1,
      },
      App\Models\User {#6175
        name: "Ottilie Waters",
        email: "susie13@example.net",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$OUuG0Eq77jAeR2vNp6VWl.WsavgR6glropPXDY0tRS8wpgqbr8q.e",
        #remember_token: "4s0Mo7OK5a",
        updated_at: "2023-05-13 17:33:53",
        created_at: "2023-05-13 17:33:53",
        id: 2,
      },
      App\Models\User {#6176
        name: "Mr. Luigi Kihn IV",
        email: "rhuels@example.org",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$ed3c.GwMzP8cylPTAI26ROZuveR8SgZJery.lw1fyVL51ej4uP.za",
        #remember_token: "nVMMAbFFqS",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 3,
      },
      App\Models\User {#6177
        name: "Cooper Nienow",
        email: "kertzmann.lois@example.com",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$k0zz7k7lEUVLX3PphJQ0AegWpdNci1nu/N8HBnS9Ykx62VpNIQzOi",
        #remember_token: "zsDJf9vNlG",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 4,
      },
      App\Models\User {#6178
        name: "Mr. Alek Bahringer MD",
        email: "bwaters@example.net",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$G.Dj8a0o5QkTAzDZNoAoiuYA98QlvR49Uk8lGD5AssjSXN7g3ISrW",
        #remember_token: "txlitHiL4K",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 5,
      },
      App\Models\User {#6179
        name: "Dr. Leonora Kozey",
        email: "willms.carley@example.com",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$oo1xw.S8wQaR7dy8R26cSeTDgZwyfF/crwmgX7GKrzixDKR0vzs4q",
        #remember_token: "lgfHXnLtIa",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 6,
      },
      App\Models\User {#6180
        name: "Randy Simonis",
        email: "pearlie38@example.com",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$feR5GPrLA9dfiLQpxUwV/e5dppX3a9hGvOKHOO3TZn8eekSLiV/L2",
        #remember_token: "LyRda2FnpG",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 7,
      },
      App\Models\User {#6181
        name: "Earl Jenkins",
        email: "sofia.renner@example.org",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$rjZ.ZwIZ4wLs22WE3S1VnO/nHmJqQ.UasyiTEekMBd5IxWt7h.8Im",
        #remember_token: "OHdXc3i9pA",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 8,
      },
      App\Models\User {#6182
        name: "Dr. Helmer West",
        email: "ratke.valentin@example.com",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$b49lLfdf2AFQMOs74rw3tOzVw1cjP22XLCgRNfHelVPHTWBMo..rS",
        #remember_token: "Id9UQ1V3qJ",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 9,
      },
      App\Models\User {#6183
        name: "Mathias Walsh Jr.",
        email: "ewelch@example.net",
        email_verified_at: "2023-05-13 17:33:53",
        #password: "$2y$10$SmEMz.7B4w8.CejwfF5sreRNb8NrsqwqlriwuJTODUQUnE0dCcyFe",
        #remember_token: "LdUR44slr8",
        updated_at: "2023-05-13 17:33:54",
        created_at: "2023-05-13 17:33:54",
        id: 10,
      },
    ],
  }

  */

  #  Todo::factory(20)->create();

  /*

  [!] Aliasing 'Todo' to 'App\Models\Todo' for this Tinker session.
= Illuminate\Database\Eloquent\Collection {#6167
    all: [                                                                                                                                                `updated_at`, `created_at`) va
      App\Models\Todo {#6170
        title: "Voluptas repellat illo velit excepturi tempore molestiae error.",
        body: "Doloremque placeat facilis minima mollitia qui. Amet ea perferendis eaque placeat voluptates ab. Dolorum omnis ut unde quasi vel expedita
ullam. At omnis maiores voluptates fugiat vel ut.",
        completed: 4,
        created_by: 10,
        updated_at: "2023-05-13 17:39:46",
        created_at: "2023-05-13 17:39:46",
        id: 1,
      },
      App\Models\Todo {#6171
        title: "Dicta qui at est ducimus.",
        body: "Doloribus sunt sit voluptatem voluptates. Minima pariatur et eius quidem aut soluta harum. Dolorum omnis itaque esse qui dolore eos. Eos error repellendus assumenda excepturi officia possimus.",
        completed: 6,
        created_by: 2,
        updated_at: "2023-05-13 17:39:46",
        created_at: "2023-05-13 17:39:46",
        id: 2,
      },
      App\Models\Todo {#6172
        title: "Fugit qui fuga cum autem mollitia.",
        body: "Sit labore aut omnis ipsam in blanditiis possimus. Minima ex suscipit necessitatibus praesentium laboriosam labore magni. Corporis aut quia doloremque non magnam voluptates. Sint dolorum voluptatem sit quibusdam.",
        completed: 3,
        created_by: 1,
        updated_at: "2023-05-13 17:39:46",
        created_at: "2023-05-13 17:39:46",
        id: 3,
      },
      App\Models\Todo {#6173
        title: "Et unde deserunt quidem pariatur sint cum iusto.",
        body: "Ad nulla est sit fugiat. Ex atque consequatur numquam adipisci ut id sint ipsa. Dolor tenetur molestiae itaque. Vitae suscipit ad quidem quia sit consequuntur esse velit. Assumenda itaque vero sed quo natus.",
        completed: 4,
        created_by: 2,
        updated_at: "2023-05-13 17:39:46",
        created_at: "2023-05-13 17:39:46",
        id: 4,
      },
      App\Models\Todo {#6174
        title: "Provident libero neque itaque ea.",
        body: "Ut ut aliquid ea debitis quia sunt qui. Libero consequatur placeat quo veniam molestias. Porro in eius repellendus quasi.",
        completed: 9,
        created_by: 4,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 5,
      },
      App\Models\Todo {#6175
        title: "Atque distinctio quasi enim.",
        body: "Id aut omnis et non voluptatem autem. Voluptatem ducimus magnam nostrum eaque mollitia consequatur fugiat. Ut incidunt aut vel eius sunt aliquam illo. Molestiae eum atque consequatur molestias pariatur ipsa repudiandae.",
        completed: 2,
        created_by: 1,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 6,
      },
      App\Models\Todo {#6176
        title: "Dolor quo assumenda saepe sed aut.",
        body: "Iure voluptates beatae eaque non laudantium minus. Consequatur quia dolorum neque odio excepturi nam. Quis aut aut reiciendis eaque quisquam. Iusto est fuga enim veniam consectetur cupiditate.",
        completed: 6,
        created_by: 4,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 7,
      },
      App\Models\Todo {#6177
        title: "Dolore nihil quis qui repudiandae.",
        body: "Reiciendis explicabo alias necessitatibus quam veniam nostrum. Qui magnam nihil velit quas non non magni.",
        completed: 10,
        created_by: 9,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 8,
      },
      App\Models\Todo {#6178
        title: "Porro quidem distinctio unde dicta.",
        body: "Tempora dicta omnis et ducimus mollitia quia. Molestiae unde fuga aut voluptas magnam et. Voluptatem pariatur et rerum ut autem ea. Voluptatem quas vitae quam porro nihil voluptatem.",
        completed: 1,
        created_by: 5,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 9,
      },
      App\Models\Todo {#6179
        title: "Minima consequatur corporis molestias voluptatem doloremque.",
        body: "Rerum quaerat sed nobis. Repellendus nisi quod labore fuga. Atque ullam ipsa velit et.",
        completed: 6,
        created_by: 8,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 10,
      },
      App\Models\Todo {#6180
        title: "Quos qui ullam fugit.",
        body: "Perferendis qui qui rerum sapiente tempore. Quidem eum dolorem iusto iste officiis. Earum adipisci excepturi porro velit officia mollitia
eveniet. Sunt voluptate sunt aperiam.",
        completed: 3,
        created_by: 2,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 11,
      },
      App\Models\Todo {#6181
        title: "Tenetur delectus et consequuntur rerum eos quae sequi.",
        body: "Eligendi autem possimus rem. Omnis magnam animi voluptatibus sunt et. Adipisci qui id excepturi impedit. Provident libero nobis aliquid eos numquam ratione doloremque. Aut dolores rerum magnam ut facere.",
        completed: 1,
        created_by: 9,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 12,
      },
      App\Models\Todo {#6182
        title: "Quia consequuntur distinctio dolores eveniet est veniam cum.",
        body: "Magnam quia dolor eius quo voluptatem saepe assumenda. Laborum quisquam dolore dolorum sint. Est laudantium qui repellendus.",
        completed: 10,
        created_by: 10,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 13,
      },
      App\Models\Todo {#6183
        title: "Accusamus ea voluptatem et aut iusto eum.",
        body: "Magni rem quaerat quo. Nihil non consequatur magni quo consectetur vel. Nemo ut illum quod optio sed.",
        completed: 8,
        created_by: 5,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 14,
      },
      App\Models\Todo {#6184
        title: "Iusto id asperiores qui molestiae.",
        body: "Expedita sed cumque tenetur odio beatae. Sapiente eligendi excepturi est ex consequatur et ex. Cum porro facere sunt et occaecati dolores. Natus voluptas totam aliquam velit odit.",
        completed: 4,
        created_by: 8,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 15,
      },
      App\Models\Todo {#6185
        title: "Quis recusandae pariatur aliquam asperiores laborum qui at.",
        body: "Harum quos labore dolorem voluptate ut inventore deleniti qui. Et blanditiis non cupiditate dolorem sit fugiat labore. Nemo occaecati modi incidunt nesciunt expedita blanditiis.",
        completed: 1,
        created_by: 1,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 16,
      },
      App\Models\Todo {#6186
        title: "Est a ea ab.",
        body: "Enim dolores qui dolorum enim omnis. Aut maxime error sint ut voluptatem.",
        completed: 7,
        created_by: 10,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 17,
      },
      App\Models\Todo {#6187
        title: "Impedit illum qui quis aspernatur aspernatur commodi non.",
        body: "Molestias ducimus maiores rerum. Aut dicta magnam reiciendis maiores. Amet eveniet et natus mollitia cupiditate. Voluptatem accusamus pariatur possimus et qui quam quae aspernatur.",
        completed: 2,
        created_by: 1,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 18,
      },
      App\Models\Todo {#6188
        title: "Velit cupiditate nostrum ut natus ipsum facere officiis.",
        body: "Esse blanditiis et fugiat. Modi quam tempora atque voluptatem. Dolor neque dicta culpa nihil eos et reiciendis.",
        completed: 6,
        created_by: 7,
        updated_at: "2023-05-13 17:39:47",
        created_at: "2023-05-13 17:39:47",
        id: 19,
      },
      App\Models\Todo {#6189
        title: "Sit qui quis enim.",
        body: "Blanditiis voluptatibus eveniet illo fuga inventore. Occaecati accusamus excepturi consequuntur. Et exercitationem consectetur ratione expedita dolores nihil ea. Sint consequatur et perspiciatis sed aut error.",
        completed: 2,
        created_by: 7,
        updated_at: "2023-05-13 17:39:48",
        created_at: "2023-05-13 17:39:48",
        id: 20,
      },
    ],
  }


  */


/* data store, queries ran:

  # endpoint: http://127.0.0.1:8000/api/auth/login, request type: post
    {
    "email": "ewelch@example.net",
    "password": "password"
    }

    # reponse:

    {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2ODQwMDA3NDcsImV4cCI6MTY4NDA4NzE0NywibmJmIjoxNjg0MDAwNzQ3LCJqdGkiOiJmQVpXc0IwN3VvVTVyY1UwIiwic3ViIjoiMTAiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.DUM_oVD_voZBgMS-dmtYakZx-se9wyMzi_32NIQomus",
        "token_type": "bearer",
        "token_validity": 86400
    }

*/
/*
    endpoint: http://127.0.0.1:8000/api/auth/profile, request type:get
    Authorization: Type: Bearer Token, Value: please provide the one you got from login method

    Response:

        {
            "id": 10,
            "name": "Mathias Walsh Jr.",
            "email": "ewelch@example.net",
            "email_verified_at": "2023-05-13T17:33:53.000000Z",
            "created_at": "2023-05-13T17:33:54.000000Z",
            "updated_at": "2023-05-13T17:33:54.000000Z"
        }


    endpoint: http://127.0.0.1:8000/api/auth/refresh, request type: POST
    please provide the bearer token as well

    response:

        {
            "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvcmVmcmVzaCIsImlhdCI6MTY4NDAwMDc0NywiZXhwIjoxNjg0MDA2ODc5LCJuYmYiOjE2ODQwMDMyNzksImp0aSI6Im00bEpJZDZRVGdjbVF3SzAiLCJzdWIiOiIxMCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.APPcT2iiIw9d9UW7IylPaS2cR3FxHzTOr-BVdsXaNls",
            "token_type": "bearer",
            "token_validity": 3600
        }


    endpoint: http://127.0.0.1:8000/api/auth/logout, request type: POST
    please provide the newly created bearer token from refresh method

 */







