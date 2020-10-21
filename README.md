# XIMPLE TOOL

## Ubuntu Setup

### Creating a New User

  adduser guillo
  usermod -aG sudo guillo

### Setting Up a Basic Firewall

  ufw allow OpenSSH
  ufw enable
  ufw status

### Uses SSH Key Authentication

  rsync --archive --chown=guillo:guillo ~/.ssh /home/guillo

### Update & Upgrade

  sudo apt update
  sudo apt upgrade
  sudo apt install unzip
  sudo apt install git
  sudo apt-get install git-core

### config git

  git config --global user.name "@guillorrr"
  git config --global user.email "guillermobaron@gmail.com"
  git config --global credential.helper store

### Install ZSH

  sudo apt-get install zsh
  cd /tmp
  wget https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh -O - | zsh
  git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ~/.oh-my-zsh/custom/plugins/zsh-syntax-highlighting
  git clone https://github.com/zsh-users/zsh-autosuggestions ~/.oh-my-zsh/custom/plugins/zsh-autosuggestions

  sed -i 's/ZSH_THEME=\"robbyrussell\"/ZSH_THEME=\"agnoster\"/g' ~/.zshrc
  sed -i 's/plugins=(git)/plugins=(\n\tgit\n\tlaravel\n\tcomposer\n\tdotenv\n\tgitignore\n\thistory\n\t#homestead\n\t#wp-cli\n\tzsh-syntax-highlighting\n\tzsh-autosuggestions\n)/g' ~/.zshrc
  chsh -s /bin/zsh

### Change Local Time Zone
  sudo timedatectl set-timezone America/Argentina/Buenos_Aires

### Copiar la contraseña y reconfigurar mysql

  sudo cat /root/.digitalocean_password
  mysql_secure_installation

### install phpmyadmin

  sudo apt install phpmyadmin
  sudo sed -i 's#Alias /phpmyadmin /usr/share/phpmyadmin#Alias /db /usr/share/phpmyadmin#g' /etc/apache2/conf-available/phpmyadmin.conf

### Habilitar el modulo mod_rewrite de Apache
  sudo a2enmod rewrite
  sudo sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#g' /etc/apache2/sites-available/000-default.conf

  # reiniciar apache
  sudo systemctl restart apache2
  
## Enviroment Setup

### Installing Laravel Required PHP Extensions

  sudo apt-get install php7.4-curl php7.4-gd php7.4-json php7.4-mbstring php7.4-intl php7.4-mysql php7.4-xml php7.4-zip php7.4-bcmath php7.4-common openssl

### Composer

  curl -sS https://getcomposer.org/installer | php
  sudo mv composer.phar /usr/local/bin/composer

### To Fresh install Laravel

  cd /var/www/
  sudo chown -Rv root:$USER .
  sudo chmod -Rv g+rw .
  composer global require laravel/installer
  composer create-project laravel/laravel="7.0.*" laravel --prefer-dist

  sudo chown -R www-data: storage
  sudo chmod -R 775 storage bootstrap/cache

### To Clone repository Laravel

  git clone https://github.com/guillorrr/ximpletool.git
  cd ximpletool
  composer install

### Crear Base da datos

  mysql -u root -p
  CREATE DATABASE laravel;
  CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'password';
  GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost';
  FLUSH PRIVILEGES;

### setup laravel

  cp .env.example .env
  php artisan key:generate

### en local
  php artisan migrate

### en produccion
  php artisan migration:run --force

# Laravel Debugbar

composer require barryvdh/laravel-debugbar --dev

# install backpack

composer require backpack/crud:"4.1.*"

# you might also want to install these tools that help during development
composer require backpack/generators --dev
composer require laracasts/generators --dev


# install PermissionManager

composer require backpack/permissionmanager

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
php artisan migrate
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
// then First, add the Spatie\Permission\Traits\HasRoles trait to your User model(s)

php artisan vendor:publish --provider="Backpack\PermissionManager\PermissionManagerServiceProvider"

# ReviseOperation for Backpack for Laravel

composer require backpack/revise-operation

cp vendor/venturecraft/revisionable/src/migrations/2013_04_09_062329_create_revisions_table.php database/migrations/
php artisan migrate

# Backpack\LogManager

composer require backpack/logmanager

# [optional] Add a sidebar_content item for it
php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>"

# Backpack\Settings

# install the package
composer require backpack/settings

# run the migration
php artisan vendor:publish --provider="Backpack\Settings\SettingsServiceProvider"
php artisan migrate

# [optional] add a menu item for it to the sidebar_content file
php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Settings</span></a></li>"

# [optional] insert some example dummy data to the database
php artisan db:seed --class="Backpack\Settings\database\seeds\SettingsTableSeeder"





EVALUATIONS

php artisan make:migration:schema create_evaluations_table --model=0 --schema="title:string:unique,description:longtext:nullable,publish_date:date,expire_date:date,status:tinyInteger:default(0)"
php artisan migrate
php artisan backpack:crud evaluation #use singular, not plural


TOPICS

php artisan make:migration:schema create_topics_table --model=0 --schema="title:string:unique,description:longtext:nullable"
php artisan migrate
php artisan backpack:crud topic #use singular, not plural


DIMENSIONS

php artisan make:migration:schema create_dimensions_table --model=0 --schema="title:string:unique,description:longtext:nullable,topic_id:unsignedBigInteger:foreign"
php artisan migrate
php artisan backpack:crud dimension #use singular, not plural


ASPECTS

php artisan make:migration:schema create_aspects_table --model=0 --schema="title:string:unique,description:longtext:nullable,dimension_id:unsignedBigInteger:foreign"
php artisan migrate
php artisan backpack:crud aspect #use singular, not plural


QUESTIONS

php artisan make:migration:schema create_questions_table --model=0 --schema="title:string:unique,description:longtext:nullable,dimension_id:unsignedBigInteger:foreign,aspect_id:unsignedBigInteger:foreign:nullable"
php artisan migrate
php artisan backpack:crud question #use singular, not plural


EVALUATION QUESTION

php artisan make:migration:schema create_evaluation_question_table --model=0 --schema="evaluation_id:unsignedInteger,question_id:unsignedInteger"
