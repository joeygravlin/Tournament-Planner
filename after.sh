#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

if [ ! -f /usr/local/extra_homestead_software_installed ]; then
	echo 'installing some extra software'


    # We should be super user
    #sudo -s

    sudo apt-get update
    sudo apt-get install -y mycli


    cd /home/vagrant/Code || exit
    php artisan migrate --seed
    php artisan migrate:status

    # Last step is to install Laravel Elixir.
    npm install yarn --save-dev
    sudo npm upgrade --global yarn
    yarn install
    # If you are developing on a Windows system or you are running your VM on a
    # Windows host system, you may need to run the npm install command with the
    # --no-bin-links switch enabled:
    # npm install --no-bin-links

    # Pull in Gulp as a global NPM package:
    # See: https://laravel.com/docs/5.3/elixir
    #yarn global add gulp-cli
    #npm install -g gulp-cli


    #
    # remember that the extra software is installed
    #
    sudo touch /usr/local/extra_homestead_software_installed
else
    echo "extra software already installed... moving on..."
fi

exit
