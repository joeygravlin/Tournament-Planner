# Tournament-Planner

## CIS467 - Capstone project: Tournament-Planner

### Setup
Install the following on your machine:
- [VirtualBox: download](https://www.virtualbox.org/)
- [Vagrant: download](https://www.vagrantup.com/downloads.html)

Here's a reference for setting-up and using Vagrant.
- [Vagrant: getting-started](https://www.vagrantup.com/docs/getting-started/)

Once Vagrant and VirtualBox are both installed, you're ready to pull down this repo.
[Github Repo: Zeeric/Tournament-Planner](https://github.com/Zeeric/Tournament-Planner)
From there, I'd suggest doing something like the following:

```
git clone git@github.com:Zeeric/Tournament-Planner.git
cd Tournament-Planner
git checkout develop-homestead
git checkout -b develop-homestead-YOUR_USERNAME
mv Homestead.yaml{.example,}
```

This application uses [Laravel Homestead](https://laravel.com/docs/5.5/homestead), which is basically a Vagrant box (a virtual machine) that is configured with everything needed to run out webapp. Before we can run the virtual machine, you'll need to adjust the `Homestead.yaml` config according to the file path where you cloned this repository. (you might also want to tweak stuff in there if you know it will run better for you...) Once `Homestead.yaml` is ready, add the necessary entry to the system's hosts file - before we can run the virtual machine with our app.

>#### The Hosts File

>You must add the "domains" for your Nginx sites to the hosts file on your machine. The hosts file will redirect requests for your Homestead sites into your Homestead machine. On Mac and Linux, this file is located at /etc/hosts. On Windows, it is located at  `C:\Windows\System32\drivers\etc\hosts`. The lines you add to this file will look like the following:

>```bash
>## CIS467 - Capstone project: Tournament-Planner
>192.168.10.10   tournament-planner.app
>```

Alternatively, if you'd rather not have to worry about manually modifying your hosts file, you may find [Vagrant::Hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater) to be usefull.

### Running the VM
Once you have that all setup, run `vagrant up`
The first time you run this, vagrant will have to download the base box, which I think is ~1GB (IIRC...). Once thats downloaded, the vagrant will procede to provision the new VM. Once that's finished, you can access the app your browser at [tournament-planner.app](http://tournament-planner.app/). The VM will stay running until you tell it to `vagrant suspend` or `vagrant halt`. Other useful homestead / vagrant tips may be found at [Homestead: daily-usage](https://laravel.com/docs/5.5/homestead#daily-usage) and [Vagrant Docs](https://www.vagrantup.com/docs/getting-started/). Here's one potentially pertinant excerpt from the homestead docs:

>#### Connecting To Databases
>A `homestead` database is configured for both MySQL and Postgres out of the box. For even more convenience, Laravel's `.env` file configures the framework to use this database out of the box.
>
>To connect to your MySQL or Postgres database from your host machine via Navicat or Sequel Pro, you should connect to `127.0.0.1` and port `33060` (MySQL) or `54320` (Postgres). The username and password for both databases is `homestead` / `secret`.
>You should only use these non-standard ports when connecting to the databases from your host machine. You will use the default `3306` and `5432` ports in your Laravel database configuration file since Laravel is running within the virtual machine.

### Extra DB Utilities
I've added a few extra utils to help with working with the DB:
- [mycli](https://mariadb.com/kb/en/mariadb/mycli/) - for mo' betta cli, with colors and auto-complete.

This one is actaully included in mysql/mariadb
- [mysqldump](https://mariadb.com/kb/en/mariadb/mysqldump/) - good for backing up and restoring tables and such.

Also, I've configured our app to use mariaDB.

### More To Come
Feel free to ask me anything I've missed!


-------------------------------------------------------------------------------

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
