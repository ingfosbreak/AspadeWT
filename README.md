# AspadeWT
For educational purpose only ( Web tech CS442 KUCS )

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

sail artisan storage:link
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
sail artisan migrate:fresh --seed
```

# FRONTEND TEST
เข้าไปที่
http://localhost/


# Mockup-DATA

ADMIN
- admin
- admin

USER
- user
- user

- user1
- user1

- user2
- user2




