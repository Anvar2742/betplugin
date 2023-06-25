# Project Name

Welcome to the project!

## Requirements

To use this project, you'll need to have the following software installed on your computer:

- Git
- PHP 7.4 or higher
- Composer 2.*
- Node.js 18.*
- Yarn 3.*
- WSL

---
### *Important: the project must run in a WSL instance.*

---

## Install NVM

NVM is user-dependent so you will need to install it on the user profile you will be working on. Use `sudo` as necessary.

To install NVM (Node Version Manager) on WSL, you can follow these steps:

1. Open a terminal in your WSL instance.
2. Install curl, which is required to download NVM:

```bash
sudo apt-get install curl
```

3. Download and install NVM using curl:
```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
```

This command will download and run the NVM installation script from the official NVM GitHub repository.

4. Close and reopen the terminal to activate the NVM changes.
5. Verify that NVM is installed and working correctly by running the following command:

`nvm --version`

This should output the version of NVM installed on your system.

6. Install a specific version of Node.js using NVM, for example:

```bash
nvm install 18.10.0
```

This will install Node.js version 18.10.0 on your system. You can install other versions of Node.js by replacing "18.10.0" with the version number you want to install.

It should also suffice to just use the major version:

```bash
nvm install 18
```

That's it! You now have NVM installed on your WSL instance and can use it to manage multiple versions of Node.js on your system.

## Clone the repository

To get started, clone this repository to your local machine.

- The project must be in `/var/www/{some_folder}` in WSL. It will not work on a mounted drive.
- You must add your public SSH to your RakeTech GitLab account to be able to use the repo.

To generate SSH keys in WSL, you can follow these steps:
1. Open a terminal in your WSL instance.
2. Type the following command to generate a new SSH key pair:

```bash
   ssh-keygen -t rsa -b 4096
```

3. Press enter to accept the default file location and name for your SSH key pair.
4. Don't use password, otherwise you'll have to enter it every time you push a commit.
5. Once the key pair is generated, you can view the public key by running

```bash
cat ~/.ssh/id_rsa.pub
````

6. Copy the entire contents of the public key to your clipboard.
7. Add the public key to your GitLab account.

### Clone the repo

``` bash
git clone git@gitlab.raketech.com:lv_migration/liverattning-roots.git
```

## Install dependencies

After cloning the repository, navigate into the project folder and install PHP dependencies using Composer:

``` bash
cd liverattning-roots
composer install
```

Then:

``` bash
cd web/app/themes/liverattning
```

And install the JavaScript dependencies using Yarn:

``` bash
yarn
```

This will create the `node_modules` folder.

Next, it's very important to run

``` bash
yarn build
```

This creates the `manifest.json` and other assets, otherwise the site will throw a fatal error. 

## Configuration

### Apache Server Block

```apacheconf
<VirtualHost *:80>

        ServerAdmin webdevlaragon@gmail.com
        ServerName liveratsage.test
        ServerAlias www.liveratsage.test

        DocumentRoot /var/www/{some_folder}/liveratsage/web

        DirectoryIndex index.php index.html index.htm

        <Directory /var/www/{some_folder}/liveratsage/web>
                Options Indexes FollowSymLinks Multiviews
                AllowOverride All
        </Directory>

        <FilesMatch \.php$>
                # From the Apache version 2.4.10 and above, use the SetHandler to run PHP as a fastCGI process server
                SetHandler "proxy:unix:/run/php/php8.2-fpm.sock|fcgi://localhost"
        </FilesMatch>

        ErrorLog /var/www/{some_folder}/liveratsage/error.log
        CustomLog /var/www/{some_folder}/liveratsage/access.log combined

</VirtualHost> 
```

Copy the `.env.example` file to create a `.env` file, and update the values to match your local environment:

``` bash
cp .env.example .env
```

## Build assets
To build the front-end assets, run the following command:

``` bash
yarn build
```
This will compile the Sass files, concatenate and minify JavaScript files, and optimize images.

## Development
To start the development server and watch for changes, run:

``` bash
yarn dev
```
This will compile the front-end assets and start a BrowserSync server, which will automatically reload the page whenever you make changes to the code.

## Production
To build the project for production, run:

``` bash
yarn build
```

This will optimize the front-end assets for production, and generate a dist folder that can be deployed to a web server.

## References
[Bedrock documentation](https://roots.io/docs/bedrock/master/installation/)

[Sage documentation](https://roots.io/docs/sage/master/theme-installation/)

[Composer documentation](https://getcomposer.org/doc/)

[Yarn documentation](https://classic.yarnpkg.com/en/docs/)
# betplugin
