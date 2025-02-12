# Product Catalog - Laravel Project

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

A **Product Catalog** is a web application built with Laravel and Tailwind CSS. It allows users to manage a catalog of products, including creating, reading, updating, and deleting (CRUD) products and categories. Additionally, users can add ratings to products and filter or sort the product list.

---

## Features

- **Product Management**:
  - Create, read, update, and delete products.
  - Each product has attributes like name, price, color, memory RAM, and category.
  
- **Category Management**:
  - Create, read, update, and delete categories.
  - Each product belongs to a category.

- **Ratings**:
  - Users can add ratings (comments and scores from 0 to 5) to products.
  - Ratings cannot be updated or deleted.

- **Filtering and Sorting**:
  - Filter products by category.
  - Sort products by name or price.

- **Authentication**:
  - Only authenticated users can create, update, or delete products and categories.

---

## Technologies Used

- **Backend**: Laravel (PHP framework)
- **Frontend**: Tailwind CSS (utility-first CSS framework)
- **Database**: MySQL
- **Authentication**: Laravel Breeze (for user authentication)

---

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
   - Run the command: `git clone https://github.com/AlexandreCK/laravel-product-platform`
   - Navigate to the project folder: `cd m07-uf3-catalog-ack`

2. **Install dependencies**:
   - Install PHP dependencies: `composer install`
   - Install Node.js dependencies: `npm install`

3. **Set up the environment**:
   - Copy the `.env.example` file to `.env`: `cp .env.example .env`
   - Generate an application key: `php artisan key:generate`
   - Configure your database credentials in the `.env` file:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

4. **Run migrations and seeders**:
   - Run migrations: `php artisan migrate --seed`

5. **Compile assets**:
   - Compile frontend assets: `npm run dev`

6. **Start the development server**:
   - Start the server: `php artisan serve`

7. **Access the application**:
   - Open your browser and go to `http://localhost:8000`.

---

## Usage

### **Product Management**
- **View Products**: Navigate to `/products` to see the list of products.
- **Create a Product**: Click on "Create New Product" and fill out the form.
- **Edit a Product**: Click on "Edit" next to a product in the list.
- **Delete a Product**: Click on "Delete" next to a product in the list.

### **Category Management**
- **View Categories**: Navigate to `/categories` to see the list of categories.
- **Create a Category**: Click on "Create New Category" and fill out the form.
- **Edit a Category**: Click on "Edit" next to a category in the list.
- **Delete a Category**: Click on "Delete" next to a category in the list.

### **Ratings**
- **Add a Rating**: Go to the product details page (`/products/{id}`) and fill out the rating form.
- **View Ratings**: Ratings are displayed on the product details page.

### **Filtering and Sorting**
- Use the filters and sorting options on the products page (`/products`) to customize the product list.

---

## Screenshots

![Home Page](screenshots/home.png)
*Home Page with Hero Image*

![Product List](screenshots/products.png)
*List of Products with Filtering and Sorting Options*

![Product Details](screenshots/product-details.png)
*Product Details with Ratings*

---

## Contributing

Contributions are welcome! If you'd like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Acknowledgments

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [GitHub Shields](https://shields.io/) for badges.

---

## Contact

If you have any questions or suggestions, feel free to reach out!
