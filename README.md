# Mobile Legends Diamond Top-up Store

## Overview
This repository is for the Mobile Legends Diamond Top-up Store, a platform designed for users to purchase in-game diamonds securely and efficiently.

## Installation Instructions
1. **Clone the repository:**  
   ```bash
   git clone https://github.com/zalouz/Zekaistore
   cd Zekaistore
   ```  
2. **Install dependencies:**  
   ```bash
   npm install
   ```  
3. **Setup environment variables:**  
   Create a `.env` file and add the required variables:
   - `DATABASE_URL`
   - `API_KEY`
   - Other necessary configurations

4. **Run the application:**  
   ```bash
   npm start
   ```

## API Endpoints
- **POST /api/topup**  
  Description: Initiate a Diamond top-up  
  Parameters:  
  - userId (string)  
  - amount (number)  
  - paymentMethod (string)  
  - transactionId (string)  

- **GET /api/transactions/{userId}**  
  Description: Retrieve transaction history for a user  

- **GET /api/status**  
  Description: Check the status of the top-up process  

## Database Schema
| Table name      | Columns                               | Description                                    |
|------------------|---------------------------------------|------------------------------------------------|
| users            | id, username, password, email         | Stores user information                        |
| transactions     | id, userId, amount, paymentMethod    | Records all transactions made                  |
| diamonds         | id, amount                            | Stores available diamond packages               |

## Troubleshooting Guide
- **Common Issues:**  
  - **Timeout Errors:**  
    Make sure your server is running and your database is configured correctly.
  - **API Key Errors:**  
    Double-check your API key and ensure it has the right permissions.

- If you encounter any issues, raise an issue in this repository or contact support.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Contact
For further inquiries, please reach out via email at support@yourdomain.com.
