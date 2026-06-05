FROM php:7.4-apache

# อัปเดตและติดตั้งส่วนขยาย mysqli สำหรับเชื่อมต่อฐานข้อมูล
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# เปิดใช้งาน mod_rewrite ของ Apache
RUN a2enmod rewrite

# คัดลอกไฟล์ทั้งหมดในโปรเจกต์ไปยังโฟลเดอร์ของเว็บเซิร์ฟเวอร์
COPY . /var/www/html/

# กำหนดสิทธิ์ให้ Apache สามารถอ่านไฟล์ได้
RUN chown -R www-data:www-data /var/www/html/

# เปิดพอร์ต 80
EXPOSE 80
