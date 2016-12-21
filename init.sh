#!/bin/sh
cp .env.example .env

echo "====================================================="
echo "DatabaseNameをOIC_RaspiShopとして.envを更新します"
sed -i -e 's/DB_DATABASE=homestead/DB_DATABASE=OIC_RaspiShop/' .env

echo "====================================================="
echo "DBのユーザ名を入力"
read username

echo "====================================================="
echo "DBのパスワードを入力"
read userpass

sed -i -e 's/DB_USERNAME=homestead/DB_USERNAME='$username'/' .env
sed -i -e 's/DB_PASSWORD=secret/DB_PASSWORD='$userpass'/' .env

echo "====================================================="
echo "!! key:generate !!"
echo "====================================================="
php artisan key:generate

echo "====================================================="
echo "OIC_RaspiShop を一度作成しましたか？(Y/N)"
read ans
echo "====================================================="

if [ $ans = N ]; then

    echo "====================================================="
    echo "Database[OIC_RaspiShop] Create Now!"
    echo "mySQLのパスワードを入力"
    echo "====================================================="

	mysql -u root -p -e 'create database OIC_RaspiShop'

else
    echo "====================================================="
    echo "[OIC_RaspiShop] Dump file write"
    echo "mySQLのパスワードを入力"
    echo "====================================================="
    mysql -u root -p -e 'drop database `OIC_RaspiShop`;create database `OIC_RaspiShop`'

fi

php artisan migrate
php artisan db:seed
