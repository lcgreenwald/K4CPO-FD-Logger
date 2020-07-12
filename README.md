# K4CPO-FD-Logger
browser based logger for field day
Customized for WB0SIO/N0SUW
Additional navigation links

# Install
git clone https://github.com/lcgreenwald/K4CPO-FD-Logger.git
sudo apt-get install -y php7.3 mariadb-server phpmyadmin
cd K4CPO-FD-Logger
rm adif_log.txt
nano setup
bash setup
sudo mkdir /var/www/html/log
sudo chmod 777 /var/www/html/log
sudo cp * /var/www/html/log/
sudo nano /var/www/html/log/constants.php
