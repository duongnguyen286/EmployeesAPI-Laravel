## Khởi tạo project
```
composer create-project laravel/laravel:^9.0 example-app
```
##  Chạy project 
```
php artisan serve
```
## Tạo bảng trong MySQL
```
php artisan migrate:install

```
## Tạo file trong thư mục migrations
```
php artisan make:migration create_employees_table --create=employees
```
## Tạo all bảng
```
php artisan migrate
```
## Tạo file trong thư mục seeders
```
php artisan make:seeder EmployeesTableSeeder 
```
## Insert dữ liệu mẫu
```
php artisan db:seed
```
# Tạo file trong thư mục Models
```
php artisan make:model Employee
```
# Tạo file trong thư mục Controllers
```
php artisan make:controller EmployeeController 
```

