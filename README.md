# **Conference Management System (CMS)**

## **Introduction**

The **Conference Management System (CMS)** is a web application designed to help conference organizers create, manage, and organize conferences. Organizers can create conferences, add sessions, manage speakers, and handle attendee registrations. The platform also provides a seamless experience for attendees to browse sessions, register, and receive notifications.

This system is designed to be user-friendly, scalable, and robust, making it a perfect tool for managing various conferences, from small academic events to large international conferences.

## **Installation**

To install and run the **Conference Management System (CMS)**, follow the steps below.

### Step 1: Clone the repository

Start by cloning the project repository:
```bash
git clone https://github.com/AsmitNepali/conference.git
cd conference
```
### Step 2: Set up environment variables
Copy the .env.example file to .env:
```bash
cp .env.example .env
```
Then, configure the .env file with your environment settings, such as database credentials, mail settings, etc.

### Step 3: Install PHP dependencies
Install the required PHP dependencies using Composer:
```bash
composer install
```

### Step 4: Generate application key
Generate a unique application key for your Laravel application:
```bash
php artisan key:generate
```

### Step 5: Run database migrations
Set up the database by running the migrations:
```bash
php artisan migrate
```

### Step 6: Serve the application
Run the application locally using the built-in Laravel development server:
```bash
php artisan serve
```
