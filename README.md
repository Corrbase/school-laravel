
## This is the `School` laravel project (v8)



#### Prerequisites:

- PHP >= 7.3
- MySQL >= 5.6
- Composer
- NPM (Node.js)


#### Installation

- Clone the repository and install the dependencies:
```bash
git clone https://github.com/Corrbase/school-laravel.git
cd school-laravel

composer install
npm install
```

- Set up the database and set appropriate variables in **.env** file (see **.env.example**)
```
php artisan key:generate
```

- Optimize the caches:
```
php artisan optimize
```

- **[Optional]** Checkout to the specific commit you want:
```bash
git checkout <commit_hash>
```

[All commits](https://github.com/Corrbase/school-laravel/commits/master)

#### 



#### Resources:

- [Common Resource Routes](#common-resource-routes)

#### Common Resource Routes

>index - show all listings </br>
>show  - show single listing </br>
>create - Show form to create ew listing </br>
>store - store new listing </br>
>edit - show form to edit listing </br>
>update - update listing </br>
>destroy - Delete listing </br>



