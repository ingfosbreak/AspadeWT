# คำสั่งที่ใช้ในการ install dependencies


```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs

cp .env.example .env

sail up -d
sail artisan key:generate

sail yarn install
sail yarn dev
```

สามารถสั่ง run ได้จาก bash โดยการ cd มาที่ laravel แล้ว run ด้วยคำสั่ง
```
make
```

หลังจากนั้นแก้ .env เข้าไปที่
https://www.notion.so/env-8879a6f89fdc42e58b34f0f59fba7406

copy .env ในลิ้งค์ไปใส่ใน .env ของ local directory เราเอง

เป็นอันเสร็จสิ้น



# Migration
ทดสอบการ migrate
```
sail up -d
sail artisan migrate:fresh
```

# FRONTEND TEST
เข้าไปที่
http://localhost/test

<img src="https://media.discordapp.net/attachments/1133337598203539617/1133643103824257075/Screen_Shot_2566-07-26_at_13.12.48.png?width=834&height=1070"
     alt="website test"
     style="margin: 0 auto;" />


สามารถลาก block เหลี่ยม ๆ ได้ถือว่าผ่าน minimum สามารถเริ่มพัฒนาได้เลย