Commands for Laravel WebSockets

1. composer require beyondcode/laravel-websockets

2. php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"

3. php artisan migrate

<!-- if you getting error then use this command -->
4. composer require doctrine/dbal

5. php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"

6. composer require pusher/pusher-php-server "~3.0"


npm install

//if getting error on npm run dev then run this commands
npm install -g cross-env
npm install cross-env --save-dev
cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --config=node_modules/laravel-mix/setup/webpack.config.js



<!-- resource/js/bootstrap.js in add this configration -->
import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
broadcaster: 'pusher',
key: process.env.MIX_PUSHER_APP_KEY,
cluster: process.env.MIX_PUSHER_APP_CLUSTER,
forceTLS: false,
wsHost: window.location.hostname,
wsPort: 6001,
disableStats: true,
});


<!-- if getting error after add window.Echo then run this commands -->
npm install --save laravel-echo pusher-js

npm install -g laravel-echo-server

cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --config=node_modules/laravel-mix/setup/webpack.config.js


<!-- .env file configration -->
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=12345
PUSHER_APP_KEY=ABCD
PUSHER_APP_SECRET=EFGHIJKL
PUSHER_APP_CLUSTER=mt1


<!-- config/broadcasting.php configration -->
//if you are on local server then use useTLS
'useTLS' => true,
//if you are on Live server then use encrypted
// 'encrypted' => true,
//if you are on Live server then use Live server host and port
'host' => '127.0.0.1',
'port' => 6001,
//if you are on local server then use http
'schema' => 'http',
//if you are on Live server then use https
// 'schema' => 'https',