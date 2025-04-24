<p align="center"><a href="https://foodbakery.laravel.cloud/" target="_blank"><img src="https://raw.githubusercontent.com/MrAHMED14/foodbakery/da7ab1c8524d469b7023001ecc48e43708aaa8ad/public/front/extra-images/foodbakery.svg" width="400" alt="FoodBakery"></a></p>

## About FoodBakery

Foodbakery is a modern web platform that acts as a digital directory for restaurants in Tiaret Province. This innovative solution is designed to meet users' needs by providing centralized and easy access to information about local dining options. Additionally, it enables restaurant owners to enhance their visibility and engage more effectively with their customers.

## Features

- **Authentication System**: Secure authentication system with roles such as Admin, Restaurant Owner, and Customer.
- **Restaurant Management**: Manage restaurant details, menus, opening hours, location, and photo galleries.
- **Reservation System**: Allow customers to book tables online.
- **Order Management**: Handle customer orders from multiple restaurants
- **Review System**: Collect and respond to customer reviews.
- **Admin Dashboard**: A centralized dashboard for administrators to manage users, restaurants, and reviews efficiently. It provides insights and analytics to monitor platform activity and performance.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/MrAHMED14/foodbakery.git
   ```

2. Navigate to the project directory:
   ```bash
   cd foodbakery
   ```

3. Install dependencies:
   ```bash
   composer install
   npm install && npm run build
   ```

4. Set up the environment file:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database and other configuration details.

5. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```
    By default the application will start at `http://127.0.0.1:8000/`

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request.
