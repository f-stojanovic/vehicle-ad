# Classic Trader

**Symfony 6 project**

### Environment
- nginx 1.17
- php-fpm 8.1
- mysql 

### Requirements
Docker compose, Git and as the main IDE is PhpStorm (preferably the latest version with Shell Configuration supports).

### Installation
First, create a folder for your project and clone the repository:

```bash
git clone https://github.com/f-stojanovic/vehicle-ad.git
```

Open project root folder and run next configurations:
1. Open terminal and run: `docker-compose build`
2. Then: `docker-compose -f docker-compose.yml up`
3. Enter the PHP container: `docker exec -it docker exec -it vehicle-ad-php-1 /bin/bash`
4. In the container run `composer install` (after execute, it will take a little time to index the installed vendors)

Go to `http://localhost` page in your browser. If the installation is successful, you will see:

> Welcome to Classic Trader Ad Detail page!

We are using the API to access vehicle ad data and render it in twig template through Controller class.


