# 🦆 GeekGoose Blog

**GeekGoose** is a modern, feature-rich blog application built with Laravel 10, designed for sharing insights, tutorials, and thoughts on software technologies. It combines the power of Laravel with cutting-edge tools like Livewire, Filament, and Jetstream to deliver an exceptional blogging experience.

## 🌟 Key Features

### 📝 Content Management

- **Rich Blog Posts** with WYSIWYG editor support
- **Category System** with customizable colors and organization
- **Featured Posts** highlighting for homepage display
- **Post Scheduling** with published_at functionality
- **Soft Deletes** for post recovery
- **Slug-based URLs** for SEO optimization
- **Reading Time Calculation** for better user experience
- **Post Excerpts** with automatic generation
- **Image Upload Support** with thumbnail generation

### 👥 User Management & Authentication

- **Multi-role System**: Admin, Editor, and User roles
- **Laravel Jetstream Integration** with profile management
- **Two-Factor Authentication** for enhanced security
- **User Profile Photos** with avatar support
- **Email Verification** system
- **Password Reset** functionality

### 🎛️ Admin Panel (Filament 3.0)

- **Intuitive Dashboard** for content management
- **Post Management** with rich form controls
- **Category Management** with color customization
- **Comment Moderation** system
- **User Management** with role assignments
- **Resource Relations** for efficient data handling

### 🔄 Interactive Components (Livewire 3.0)

- **Real-time Post Filtering** by category and search
- **Like System** with instant feedback
- **Comment System** with live updates
- **Pagination** for smooth browsing
- **Search Functionality** with instant results
- **Sorting Options** (newest/oldest)

### 🎨 Frontend Features

- **Responsive Design** built with TailwindCSS
- **Modern UI/UX** with clean aesthetics
- **Fast Page Loads** with Vite build system
- **SEO Optimized** structure
- **Mobile-First** design approach

### ⚡ Performance & Optimization

- **Caching Strategy** for featured and latest posts
- **Database Optimization** with proper indexing
- **Eager Loading** to prevent N+1 queries
- **Image Optimization** for faster loading
- **Query Caching** for improved performance

## 🛠️ Technology Stack

### Backend

- **PHP 8.1+** - Modern PHP features and performance
- **Laravel 10** - Robust MVC framework
- **MySQL/PostgreSQL** - Reliable database systems
- **Laravel Jetstream** - Authentication scaffolding
- **Laravel Fortify** - Backend authentication services
- **Laravel Sanctum** - API authentication

### Frontend

- **Livewire 3.0** - Full-stack framework for dynamic interfaces
- **TailwindCSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework (via Jetstream)
- **Vite** - Fast build tool and dev server

### Admin & Tools

- **Filament 3.0** - Modern admin panel
- **Laravel Trend** - Analytics and trending data
- **Laravel Debugbar** - Development debugging
- **Laravel Pint** - Code style fixer

## 📁 Project Structure

```
geekgoose/
├── app/
│   ├── Models/               # Eloquent models
│   │   ├── Post.php         # Blog posts with relationships
│   │   ├── Category.php     # Post categories
│   │   ├── Comment.php      # User comments
│   │   └── User.php         # User authentication & roles
│   ├── Livewire/            # Interactive components
│   │   ├── PostList.php     # Post listing with filters
│   │   ├── LikeButton.php   # Post like functionality
│   │   └── PostComments.php # Comment system
│   ├── Filament/Resources/  # Admin panel resources
│   ├── Http/Controllers/    # Traditional controllers
│   ├── Policies/           # Authorization policies
│   └── Providers/          # Service providers
├── database/
│   ├── migrations/         # Database schema
│   ├── factories/          # Model factories for testing
│   └── seeders/           # Database seeders
├── resources/
│   ├── views/             # Blade templates
│   └── css/               # Stylesheets
└── routes/                # Application routes
```

## 🚀 Installation & Setup

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL or PostgreSQL database

### Step-by-Step Installation

1. **Clone the Repository**

   ```bash
   git clone <repository-url> geekgoose
   cd geekgoose
   ```

2. **Install PHP Dependencies**

   ```bash
   composer install
   ```

3. **Install Frontend Dependencies**

   ```bash
   npm install
   ```

4. **Environment Setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   Edit `.env` file with your database credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=geekgoose
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run Migrations & Seeders**

   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Link Storage**

   ```bash
   php artisan storage:link
   ```

8. **Build Frontend Assets**

   ```bash
   npm run dev
   # or for production
   npm run build
   ```

9. **Start Development Server**
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` to see your blog in action!

## 🔧 Configuration

### User Roles Setup

The application supports three user roles:

- **Admin**: Full access to all features
- **Editor**: Can create and manage posts
- **User**: Can comment and like posts

To create an admin user:

```bash
php artisan tinker
```

```php
$user = App\Models\User::create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => bcrypt('password'),
    'role' => 'ADMIN'
]);
```

### Filament Admin Panel

Access the admin panel at `/admin` with admin credentials.

### Cache Configuration

The application uses caching for better performance:

- Featured posts cache (24 hours)
- Latest posts cache (24 hours)
- Categories cache (3 days)

Clear cache when needed:

```bash
php artisan cache:clear
```

## 📊 Database Schema

### Core Tables

- **users** - User authentication and profiles
- **posts** - Blog posts with metadata
- **categories** - Post categorization
- **comments** - User comments on posts
- **post_like** - Post likes (many-to-many)
- **category_post** - Post-category relationships

### Key Relationships

- User → Posts (One-to-Many)
- User → Comments (One-to-Many)
- User ↔ Post Likes (Many-to-Many)
- Post ↔ Categories (Many-to-Many)
- Post → Comments (One-to-Many)

## 🎯 Usage Guide

### For Content Creators

1. **Access Admin Panel** at `/admin`
2. **Create Categories** with custom colors
3. **Write Posts** using the rich editor
4. **Schedule Publishing** with future dates
5. **Feature Important Posts** for homepage display
6. **Moderate Comments** from users

### For Readers

1. **Browse Posts** on the blog page
2. **Filter by Category** for specific topics
3. **Search Posts** using the search bar
4. **Like Posts** to show appreciation
5. **Comment** to engage with content
6. **Sort** by newest or oldest

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

Generate test data:

```bash
php artisan db:seed
```

## 🚀 Deployment

### Production Setup

1. **Environment Configuration**

   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

2. **Optimize for Production**

   ```bash
   composer install --no-dev --optimize-autoloader
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   npm run build
   ```

3. **Setup Queue Workers** (if using)
   ```bash
   php artisan queue:work
   ```

### Recommended Hosting

- **VPS** with PHP 8.1+ support
- **Shared Hosting** with Composer support
- **Cloud Platforms**: DigitalOcean, AWS, Vultr
- **Laravel-specific**: Laravel Forge, Vapor

## 🔒 Security Features

- **CSRF Protection** on all forms
- **SQL Injection Prevention** via Eloquent ORM
- **XSS Protection** with Blade templating
- **Role-based Access Control** for admin features
- **Rate Limiting** on authentication
- **Two-Factor Authentication** support
- **Secure Password Hashing** with bcrypt

## 📈 Performance Optimization

- **Database Indexing** on frequently queried columns
- **Eager Loading** to prevent N+1 queries
- **Query Caching** for expensive operations
- **Image Optimization** for faster loading
- **CDN Ready** for static assets
- **Gzip Compression** support

## 🛠️ Development

### Available Artisan Commands

```bash
# Create a new post
php artisan make:model Post

# Clear all caches
php artisan optimize:clear

# Run migrations
php artisan migrate

# Generate test data
php artisan db:seed
```

### Code Style

The project uses Laravel Pint for code formatting:

```bash
./vendor/bin/pint
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests and code style checks
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 📞 Contact & Support

- **Email**: [altansaid13@gmail.com](mailto:altansaid13@gmail.com)
- **Portfolio**: [https://saidaltan.com](https://saidaltan.com)
- **Issues**: Please report bugs via GitHub issues

## 🙏 Acknowledgments

- **Laravel Team** for the amazing framework
- **Filament Team** for the excellent admin panel
- **Livewire Team** for reactive components
- **TailwindCSS Team** for the utility-first CSS framework

---

Made with ❤️ by [Said Altan](https://saidaltan.com)
