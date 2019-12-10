<h1>Schedule</h1>

## Prerequiries

<ul>
  <li>PHP 7</li>
  <li>Composer</li>
  <li>NodeJs</li>
  <li>MySQL</li>
</ul>

## Installation

<ul>
  <li>Clone the repository</li>
  <li>Installer back dependencies with <code>composer install</code></li>
  <li>Copy file <code>.env.example</code> in <code>.env</code></li>
  <li>Generate application key with <code>php artisan key:generate</code></li>
  <li>Generate JWT key with <code>php artisan jwt:secret</code></li>
  <li>Launch migrations with <code>php artisan migrate --seed</code></li>
  <li>Install front dependencies with <code>npm i</code></li>
  <li><code>npm i axios --save-dev</code></li>
  <li><code>npm i vue-axios --save-dev</code></li>
  <li><code>npm i vue-router --save-dev</code></li>
  <li><code>npm i @websanova/vue-auth --save-dev</code></li>
  <li>Build front with <code>npm run watch</code></li>
</ul>

## Usage

<hr>

<p>Log as admin with <code>admin@gmail.com:admin</code> or as user with <code>user@gmail.com:secret</code></p>
