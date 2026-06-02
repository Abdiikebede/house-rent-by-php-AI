# 🏠 House Rent Management System with AI Integration

A smart web-based house rent management system built with PHP and powered by AI to streamline rental operations, automate rent calculations, and provide intelligent insights for landlords and tenants.

## ✨ Features

### Core Functionality
- **User Management** – Admin, landlord, and tenant roles with secure authentication
- **Property Management** – Add, edit, delete, and list properties with details like location, size, amenities, rent amount
- **Tenant Management** – Track tenant information, lease agreements, move-in/move-out dates
- **Rent Tracking** – Monthly rent collection, due dates, late fee calculation, payment history
- **Payment Gateway Integration** – Online rent payment via popular gateways

### 🤖 AI-Powered Features
- **Dynamic Rent Prediction** – Suggests optimal rent prices based on location, market trends, and property features
- **Late Payment Forecasting** – Predicts probability of late payments using tenant history
- **Smart Chatbot Assistant** – Answers FAQs about rent, maintenance, policies using NLP
- **Automated Lease Document Generation** – AI-generated lease agreements based on templates
- **Anomaly Detection** – Flags suspicious payment patterns or irregular activities
- **Maintenance Request Prioritization** – AI classifies and prioritizes maintenance tickets

## 🛠️ Technology Stack

| Layer       | Technology                               |
|-------------|------------------------------------------|
| Backend     | PHP 8+ (Core or Laravel)                 |
| AI/ML       | TensorFlow PHP, OpenAI API, or HuggingFace |
| Database    | MySQL / PostgreSQL                       |
| Frontend    | HTML5, CSS3, JavaScript (Bootstrap 5)    |
| APIs        | Google Maps API, SMS/Email Gateway       |
| Server      | Apache / Nginx                           |

## 📁 Project Structure


## 🚀 Installation

### Prerequisites
- PHP >= 8.0 with extensions: `curl`, `json`, `pdo_mysql`, `openssl`
- MySQL 5.7+ / PostgreSQL 12+
- Composer
- (Optional) OpenAI API key for chatbot & NLP features

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/house-rent-ai.git
cd house-rent-ai

# 2. Install PHP dependencies
composer install

# 3. Configure environment
cp .env.example .env
# Edit .env with your DB and API keys

# 4. Create database and run migrations
php migrate.php

# 5. Seed AI training data (optional)
php ai/train_models.php

# 6. Start the server
php -S localhost:8000 -t public

##📊 Database Schema (Key Tables)
users (id, name, email, role, password_hash, phone)
properties (id, landlord_id, address, bedrooms, rent, amenities, ai_suggested_rent)
tenants (id, user_id, property_id, lease_start, lease_end, monthly_rent)
payments (id, tenant_id, amount, due_date, paid_on, status, late_fee)
maintenance_requests (id, property_id, description, priority, ai_priority_score)
ai_logs (id, request_type, input_data, prediction, confidence)

##🧪 Testing
bash
# Run unit tests
php tests/run_tests.php

# Test AI predictions
php ai/test_predictions.php
