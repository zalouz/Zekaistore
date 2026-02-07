# Zekaistore Setup Guide

## 1. Installation Guide

To install the Zekaistore project, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/zalouz/Zekaistore.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Zekaistore
   ```
3. Install dependencies:
   ```bash
   npm install
   ```

## 2. Configuration Steps

To configure the project, modify the configuration file located at `config/config.json`. Here’s an example configuration:

```json
{
  "apiKey": "YOUR_API_KEY",
  "database": {
    "host": "localhost",
    "user": "dbuser",
    "password": "dbpassword",
    "dbname": "zekaidb"
  }
}
```

## 3. API Testing Examples

You can test the API using tools like Postman or curl. Here are some common API endpoints:

- **GET /api/items** - Fetches all items
   ```bash
   curl -X GET http://localhost:3000/api/items
   ```
- **POST /api/items** - Create a new item
   ```bash
   curl -X POST http://localhost:3000/api/items -H "Content-Type: application/json" -d '{"name": "New Item", "price": 10.99}'
   ```
  
## 4. Troubleshooting

If you encounter issues, consider these tips:

- Check if the server is running: 
   ```bash
   npm start
   ```
- Ensure your database is configured correctly and running.
- Consult logs for any error messages.

## 5. Project Structure

Here’s a brief overview of the project structure:

```
Zekaistore/
├── config/              # Configuration files
├── src/                 # Source code for the application
│   ├── api/             # API route handlers
│   ├── models/          # Database models
│   ├── services/        # Business logic services
│   └── utils/           # Utility functions
└── tests/               # Unit and integration tests
```
