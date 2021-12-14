<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/play' => ['AppController', 'play'],
    '/process'=>['AppController', 'process'],
    '/users' => ['AppController', 'saveUser'],
    '/history' => ['AppController', 'history'],
    '/round' => ['AppController', 'round'],
    '/rules' => ['AppController', 'rules'],
];